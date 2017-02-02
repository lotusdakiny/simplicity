<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Security\Core\User\UserInterface;
use AppBundle\Entity\Userinfo;
use AppBundle\Entity\Form;
use AppBundle\Entity\Datas;
use AppBundle\Entity\Users;
use AppBundle\Entity\Pregunta1;
use AppBundle\Entity\Pregunta2;
use AppBundle\Entity\MYPDF;

class DefaultController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request)
	{
		//check if user is logged
		if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw $this->createAccessDeniedException();
		}
		 
		// if user is logged, $user get user's object
		$user = $this->get('security.token_storage')->getToken()->getUser();
		
		$enabled1 = true;
		$enabled2 = false;
		
		// suppose that the cuestionarios are not disponible
		$button1 = utf8_encode("<a href='/#' class='btn btn-lg btn-block btn-sample dis' style='margin:20px 0;' data-toggle='modal' data-target='#ModalCuantitativo'><i class='fa fa-minus-circle' aria-hidden='true'></i> CUESTIONARIO CUANTITATIVO</a>");
		$button2 = utf8_encode("<a href='/#' class='btn btn-lg btn-block btn-sample dis' style='margin:20px 0;' data-toggle='modal' data-target='#ModalDelphi'><i class='fa fa-minus-circle' aria-hidden='true'></i> CUESTIONARIO DELPHI</a>");
		$message1 = utf8_encode("El cuestionario Cuantitativo estaré disponible del 16 al 29 de enero");
		$message2 = utf8_encode("La primera ronda del cuestionario Delphi estaré de disponible del 30 de enero al 5 de febrero y la segunda del 27 de febrero al 5 de marzo");
		
		//working with DB
		$em = $this->getDoctrine()->getManager();
		
		//If user already has filled CUESTIONARIO CUANTITATIVO in table
		$isUserCuantitativoInDB = $this->getDoctrine()
		->getRepository('AppBundle:Form')
		->findOneBy(array('userid' => $user->getForm1()));
		
		//if the cuestionario1 is enabled and user can edit it
		if ((!($isUserCuantitativoInDB))&&$enabled1) {
			$button1 = utf8_encode("<a href='cuantitativo' class='btn btn-lg btn-block btn-sample' style='margin:20px 0;'>CUESTIONARIO CUANTITATIVO</a>");
		} 
		//if the cuestionario1 is enabled but user cann't edit it
		elseif (($isUserCuantitativoInDB)&&$enabled1) {
			$button1 .= "<p class='text-center'>este cuestionario ya ha sido completado y enviado para su análisis</p>";
			$message1 = utf8_encode("este cuestionario ya ha sido completado y enviado para su análisis");
		}

		//if the cuestionario2 is enabled and user can edit it
		if (($user->getForm2())&&$enabled2) {
			$button2 = utf8_encode("<a href='cualitativo' class='btn btn-lg btn-block btn-sample' style='margin:20px 0;'>CUESTIONARIO DELPHI</a>");
		}
		//if the cuestionario2 is enabled but user cann't edit it
		elseif (!($user->getForm2())&&$enabled2) {
			$message2 = utf8_encode("este cuestionario ya ha sido completado y enviado para su anï¿½lisis");
		}
		
		//working with DB
		$em = $this->getDoctrine()->getManager();
		
		//If user already has filled PERSONAL INFO in table
		$isUserInfoInDB = $this->getDoctrine()
		->getRepository('AppBundle:Userinfo')
		->findOneBy(array('userid' => $user->getId()));
		
		//Check if users datas in the DB
		if (!($isUserInfoInDB)) {
				
			$datas = new Datas(); // create an object of arrays of choices				
			$infoobject = new Userinfo(); //create object of Userinfo entity
				
			// create a form
			$form = $this->createFormBuilder($infoobject)
			->add('especialidad', ChoiceType::class, $datas->getChoices_esp())
			->add('trabajo', TextType::class)
			->add('provincia', TextType::class)
			->add('numero', IntegerType::class)
			->getForm();
		
			$form->handleRequest($request);
				
			//if we are getting datas with our form
			if ($form->isSubmitted() && $form->isValid()) {
				/*$formobject->setA($form->get('a')->getData());*/
				$infoobject = $form->getData();
				
				//retrive if it is, otro especialidad
				$otro = $request->request->get('otro');
				if (!($infoobject->getEspecialidad())) {
					$infoobject->setEspecialidad($otro);
				}
					
				//working with DB
				$infoobject->setUserid($user->getId());
		
				//persist data in DB
				$em = $this->getDoctrine()->getManager();
				$em->persist($infoobject);
				$em->flush();
					
				return $this->render('default/welcome.html.twig', array(
				 	'username' => $user->getNombre(),
					'apellido1' => $user->getApellido1(),
				 	'button1' => $button1,
				 	'message1' => $message1,
				 	'button2' => $button2,
				 	'message2' => $message2,
		 		));
			}
				
			return $this->render('default/userinfo.html.twig', array(
					'username' => $user->getNombre(),
					'apellido1' => $user->getApellido1(),
					'form' => $form->createView(),
			));
		}
		
		return $this->render('default/welcome.html.twig', array(
		 	'username' => $user->getNombre(),
			'apellido1' => $user->getApellido1(),
		 	'button1' => $button1,
		 	'message1' => $message1,
		 	'button2' => $button2,
		 	'message2' => $message2,
		 ));
	} 
    
    /**
     * @Route("/guardar-cuantitativo")
     */
    public function guardarCuantitativoAction()
    {   
    	//check if user is logged
    	if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
    		throw $this->createAccessDeniedException();
    	}
    	 
    	// if user is logged, $user get user's object
    	$user = $this->get('security.token_storage')->getToken()->getUser();
    	
    	//Set "Form1 is filled up"
    	$em = $this->getDoctrine()->getManager();
    	$user->setForm1('1');
    	$em->flush();
    	
    	//If user already has filled info table
    	$form = $this->getDoctrine()
    	->getRepository('AppBundle:Form')
    	->findOneBy(array('userid' => $user->getId()));
    	
    	$datas = new Datas(); // create an object of arrays of choices
    	
    	//create HTML for convert it to PDF
    	$html = $this->renderView(
    			'default/pdf.html.twig',
    			array(
    					'form' => $form,
    					'apellido' => $user->getApellido1(),
    					'titulos' => $datas->getTitulos_f1(),
    					'noaplica' => $datas->getNo_aplica_pdf(),
    			)
    		);
    	
    	//create PDF
    	$pdf_as_string = $this->returnPDFResponseFromHTML($html);
    	 
    	$attachment = \Swift_Attachment::newInstance()
    	->setFilename('Cuestionario Simplicity Respuestas.pdf')
    	->setContentType('application/pdf')
    	->setBody($pdf_as_string)
    	;
    	 
    	//send result by email
    	$message = \Swift_Message::newInstance();
    	$message
    	->setSubject($datas->getEmail()['subject-result'])
    	->setFrom($datas->getEmail()['from'])
    	//->setTo('irina.korzhenevskaia@clover-sgm.es')
    	->setTo($user->getEmail())
    	->setBody($this->renderView('email/respuestas.html.twig',
    					array(
    						'apellido' => $user->getApellido1(),
    						)
    				), 'text/html')
    			->attach($attachment);
    			 
    	//send email
    	$this->get('mailer')->send($message);
    	
    	return $this->render('default/ok.html.twig', array(
    			'username' => $user->getNombre(),
    			'cuestionario' => 'CUANTITATIVO',
    	));

    }

    /**
     * @Route("/guardar-cualitativo")
     */
    public function guardarCualitativoAction()
    {
    	//check if user is logged
    	if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
    		throw $this->createAccessDeniedException();
    	}
    
    	// if user is logged, $user get user's object
    	$user = $this->get('security.token_storage')->getToken()->getUser();
    	 
    	$em = $this->getDoctrine()->getManager();
    	$user->setForm2('0');
    	$em->flush();
    	 
    	return $this->render('default/ok.html.twig', array(
    			'username' => $user->getNombre(),
    			'cuestionario' => 'CUALITATIVO',
    	));
    	//return new Response('<html><body>Admin page!</body></html>');
    }
    
    /**
     * @Route("/olvido")
     */
    public function olvidoAction(Request $request)
    {
    	$email = $request->request->get('email');
    	if ($email) {
    		
    		//Start to work with DB
    		$em = $this->getDoctrine()->getManager();
    		
    		$datas = new Datas();
    		
    		//get password of user with his email
    		$user = $this->getDoctrine()
    		->getRepository('AppBundle:Users')
    		->findOneBy(array('email' => $email));
    		
    		if ($user) {
    			//Generate password    			
    			$token = bin2hex(openssl_random_pseudo_bytes(3));
 
    			$encoder = $this->container->get('security.password_encoder');
    			$encoded = $encoder->encodePassword($user, $token);
  			
    			$user->setPassword($encoded);
    			$em->flush();
    			
    			//send email
				/*$mensaje   = '<html>
							<head>
								<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
							</head>
							<body>
								<p>&iexcl;Ha cambiado tu contrase&ntilde;a!</p>
								<p>Tu contrase&ntilde;a ha sido modificada.</p>
								<p>Usuario: '.$user->getUsername().'<br>
								Contrase&ntilde;a: '.$token.'
								<p>'.$datas->getEmail()['firma'].'</p>
							</body>
						</html>';*/
				
				$message = \Swift_Message::newInstance()
				->setSubject($datas->getEmail()['subject-new-password'])
				->setFrom($datas->getEmail()['from'])
				->setTo($email)
				->setBody($this->renderView('email/nuevacontr.html.twig',
    					array(
    						'user' => $user->getUsername(),
    						'password' => $token,
    						)
    				), 'text/html');
				
				$mailer = $this->get('mailer');
				
				$mailer->send($message);				
				
    			return $this->render('security/contrasena.html.twig');
    		
    		} else return $this->render('security/olvido.html.twig', array(
    				'wrongemail' => $email,
    		));
    	}
    	
    	return $this->render('security/olvido.html.twig', array(
    				'wrongemail' => 0,
    		));
    }
    
    public function returnPDFResponseFromHTML($html){
    	
    	// create new PDF document
    	//$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    	//$html = "Eso es...";
    	//set_time_limit(30); uncomment this line according to your needs
    	// If you are not in a controller, retrieve of some way the service container and then retrieve it
    	//$pdf = $this->container->get("white_october.tcpdf")->create('vertical', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    	//if you are in a controlller use :
    	$pdf = $this->get("white_october.tcpdf")->create('vertical', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    	$pdf->SetAuthor('Simplicity');
    	$pdf->SetTitle(('Cuestionario Simplicity Respuestas'));
    	$pdf->SetSubject('Cuestionario Simplicity Respuestas');
    	$pdf->setFontSubsetting(true);
    	$pdf->SetFont('helvetica', '', 10, '', true);
    	// set default header data
    	//$pdf->SetHeaderData('img/cabecera.jpg', '100%', '', '');
    	//$pdf->setPrintHeader(false);// remove default header
    	//$pdf->setPrintFooter(false);// remove default footer
    	$pdf->SetMargins(15,45,10, true);
    	$pdf->AddPage();
        
    	$pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
    	//$pdf->Output('pdf.pdf','I'); // This will output the PDF as a response directly
    	//$stream = $pdf->Output('','S');
    	//return $stream;
    	return $pdf->Output('','S');
    }
}
