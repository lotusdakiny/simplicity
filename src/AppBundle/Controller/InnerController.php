<?php
// src/AppBundle/Controller/InnerController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Users;
use AppBundle\Entity\Datas;
use Symfony\Component\VarDumper\Cloner\Data;

class InnerController extends Controller
{
	/**
	 * @Route("/test-email")
	 */
	public function testEmailAction()
	{
		$to = "irina.korzhenevskaia@clover-sgm.es";
		$body = "hola";
		$subject = "My Subject";
		$converted_res = (mail($to, $subject, $body)) ? 'true' : 'false';
		
		return new Response($converted_res);
	}
	
	/**
	 * @Route("/create-credentials", name="create-credentials")
	 */
	public function createAction()
	{
		$datas = new Datas();
		//Start to work with DB
		$em = $this->getDoctrine()->getManager();
		
		/*$q = $em->createQuery("select u from AppBundle\Entity\Users u WHERE (u.email NOT IN (1) and u.isactive = 1)");
		$users = $q->getResult();*/
		
		$users = $this->getDoctrine()
		->getRepository('AppBundle:Users')
		->findBy(array('id' => array(27)));
		
		foreach ($users as $user) {

			//Generate password
			$token = bin2hex(openssl_random_pseudo_bytes(3));
			//$token = 'admin';
		
			$encoder = $this->container->get('security.password_encoder');
			$encoded = $encoder->encodePassword($user, $token);
				
			$user->setPassword($encoded);
			$em->flush();
			
			//send result by email
			$message = \Swift_Message::newInstance();
			$message
			->setSubject($datas->getEmail()['subject-bienvenido'])
			->setFrom($datas->getEmail()['from'])
			//->setTo($user->getEmail())
			->setTo("irina.korzhenevskaia@clover-sgm.es")
			->setBody($this->renderView(
    					'email/bienvenido.html.twig',
    					array(
    						'apellido' => $user->getApellido1(),
    						'user' => $user->getUsername(),
    						'password' => $token,
    						)
    				), 'text/html');
			
			//send email
			$this->get('mailer')->send($message);
			
		}
			//return new Response('<html><body>'.var_dump($users)["username"].'</body></html>');
		return $this->render('inner/inner.html.twig', array(
				'users' => $users,
		));
		
	}
	
	/**
	 * @Route("/test")
	 */
	//One page with 2 forms with one "submit" button
	public function testAction(Request $request)
	{
		// create an object of arrays of choices
		$datas = new Datas();
	
		// create an object of class of each DBtable with questions
		$pregunta1 = new Pregunta1();
		$pregunta2 = new Pregunta2();
	
		// create a form
		$form1 = $this->createFormBuilder($pregunta1)
		//pregunta1
		->add('a', TextType::class)
		->add('b', TextType::class)
		->getForm();
		 
		// create a form
		$form2 = $this->createFormBuilder($pregunta2)
		//pregunta1
		->add('a', TextType::class)
		->add('b', TextType::class)
		->getForm();
	
		$form1->handleRequest($request);
		$form2->handleRequest($request);
	
		//if we are getting datas with our form
		if (($form1->isSubmitted() && $form1->isValid())&&
				($form2->isSubmitted() && $form2->isValid())){
					/*$formobject->setA($form->get('a')->getData());*/
					$pregunta1 = $form1->getData();
					$pregunta2 = $form2->getData();
						
					/*return $this->render('default/index.html.twig', array(
					 'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
					 ));*/
					return new Response(var_dump($form1).", ".var_dump($form2));
		}
	
		return $this->render('default/test.html.twig', array(
				'form1' => $form1->createView(),
				'form2' => $form2->createView(),
		));
	}
	
	/**
	 * @Route("/user")
	 */
	public function adminAction()
	{
		// create an object of arrays of choices
		$datas = new Datas();
		 
		$html = $this->renderView(
				'default/pdf.html.twig'
				);
		 
		$pdf_as_string = $this->returnPDFResponseFromHTML($html);
		 
		$attachment = \Swift_Attachment::newInstance()
		->setFilename('pdf_demo.pdf')
		->setContentType('application/pdf')
		->setBody($pdf_as_string)
		;
		 
		//send result by email
		$message = \Swift_Message::newInstance();
		$message
		->setSubject($datas->getEmail()['subject-result'])
		->setFrom($datas->getEmail()['from'])
		//->setTo('juan.martinez@clover-sgm.es')
		->setTo('irina.korzhenevskaia@clover-sgm.es')
		//->setTo('irra.space@gmail.com')
		->setBody('Estomado/a Sr./Sra. Alonso,<br>
    				Adjunto a este e-mail puede encontrar un resumen de sus respuestas al cuestionario. <br>
					Muchas gracias,<br>
					Simplicity',
				'text/html'
				)
				->attach($attachment);
				 
				//send email
				$this->get('mailer')->send($message);
				//$this->returnPDFResponseFromHTML($html);
				return new Response('<html><body>Admin page!</body></html>');
	}
}