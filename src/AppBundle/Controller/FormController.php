<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Entity\Form;
use AppBundle\Entity\Form1;
use AppBundle\Entity\Datas;

//https://knpuniversity.com/screencast/guard/error-messages - how to translate error messages
//symfony/src/Symfony/Component/Security/Core/Exception/UsernameNotFoundException.php
//symfony/src/Symfony/Component/Security/Core/Exception/BadCredentialsException.php
//symfony/src/Symfony/Component/Security/Core/Exception/AccountExpiredException.php
//http://symfony.com/doc/current/components/security/authentication.html

class FormController extends Controller
{
    /**
     * @Route("/cuantitativo", name="cuantitativo")
     */
    public function form1Action(Request $request)
    {
    	//check if user is logged
    	if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
    		throw $this->createAccessDeniedException();
    	}
    	
    	// if user is logged, $user get user's object
    	$user = $this->get('security.token_storage')->getToken()->getUser();

    	//If user already has filled CUESTIONARIO CUANTITATIVO table he goes to "you cant edit form again" page
    	$isUserCuantitativoInDB = $this->getDoctrine()
    	->getRepository('AppBundle:Form')
    	->findOneBy(array('userid' => $user->getForm1()));
    	
    	if ($isUserCuantitativoInDB) {
    		return $this->render('default/nocorrejir.html.twig', array(
    				'username' => $user->getNombre(),
    		));
    	}
    	
    	/*//if user already filled up the formulario he goes to "you cant edit form again" page
    	if (!($user->getIsactive())) {
    		return $this->render('default/nocorrejir.html.twig', array(
    			'username' => $user->getNombre(),
    		));
    	}*/
    	    	
    	// create an object of arrays of choices
    	$datas = new Datas();
    	    	
    	// create an object of class of each DBtable with questions
    	$formobject = new Form();
    	
    	// create a form
    	$form = $this->createFormBuilder($formobject)
    	//pregunta1
    	->add('p1a', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p1b', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p1c', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p1d', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p1e', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p1f', ChoiceType::class, $datas->getChoices_1_5())
    	//pregunta2
    	->add('p2a', IntegerType::class)
    	->add('p2b', IntegerType::class)
    	->add('p2c', IntegerType::class)
    	->add('p2ca', IntegerType::class)
    	->add('p2cb', IntegerType::class)
    	->add('p2cc', IntegerType::class)
    	->add('p2cd', IntegerType::class)
    	->add('p2ce', IntegerType::class)
    	->add('p2cf', IntegerType::class)
    	->add('p2cg', IntegerType::class)
    	->add('p2ch', IntegerType::class)
    	->add('p2d', IntegerType::class)
    	->add('p2e', IntegerType::class)
    	->add('p2texto1', TextType::class, array('required' => false))
    	->add('p2texto', TextType::class, array('required' => false))
    	//pregunta3
    	->add('p3a', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	->add('p3b', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	->add('p3c', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	->add('p3d', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	->add('p3e', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	->add('p3f', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	->add('p3g', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	->add('p3h', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	->add('p3i', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	->add('p3j', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	->add('p3k', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	->add('p3l', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	//pregunta4
    	->add('p4', ChoiceType::class, $datas->getChoices_p4())
    	//pregunta5
    	//->add('p5', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	//pregunta6
    	//->add('p6', ChoiceType::class, $datas->getChoices_1_5_noaplica())
    	//pregunta7
    	->add('p7', ChoiceType::class, $datas->getChoices_p7())
    	//pregunta8
    	->add('p8', ChoiceType::class, $datas->getChoices_si_no_novalorado())	
    	//pregunta9
    	->add('p9', ChoiceType::class, $datas->getChoices_p9())
    	//pregunta10a
    	->add('p10a', ChoiceType::class, $datas->getChoices_p10())
    	->add('p10b', ChoiceType::class, $datas->getChoices_p10())
    	->add('p10c', ChoiceType::class, $datas->getChoices_p10())
    	//pregunta11
    	->add('p11a', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p11b', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p11c', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p11d', ChoiceType::class, $datas->getChoices_1_5())
    	//pregunta12
    	->add('p12', ChoiceType::class, $datas->getChoices_p12())
    	//pregunta13
    	->add('p13a', ChoiceType::class, $datas->getChoices_1_4())
    	->add('p13b', ChoiceType::class, $datas->getChoices_1_4())
    	->add('p13c', ChoiceType::class, $datas->getChoices_1_4())
    	->add('p13d', ChoiceType::class, $datas->getChoices_1_4())
    	->add('p13e', ChoiceType::class, $datas->getChoices_1_4())
    	->add('p13f', ChoiceType::class, $datas->getChoices_1_4())
    	->add('p13g', ChoiceType::class, $datas->getChoices_1_4())
    	->add('p13h', ChoiceType::class, $datas->getChoices_1_4())
    	->add('p13i', ChoiceType::class, $datas->getChoices_1_4())
    	//pregunta14
    	->add('p14', ChoiceType::class, $datas->getChoices_p14())
    	//pregunta15
    	->add('p15', ChoiceType::class, $datas->getChoices_p15())
    	//pregunta16
    	->add('p16', ChoiceType::class, $datas->getChoices_p16())
    	//pregunta17
    	->add('p17letra', ChoiceType::class, $datas->getChoices_dos_cinco())
    	//pregunta18
    	->add('p18letra', ChoiceType::class, $datas->getChoices_dos_cinco())
    	//pregunta19
    	->add('p19p1a', IntegerType::class)
    	->add('p19p1b', IntegerType::class)
    	->add('p19p1c', IntegerType::class)
    	->add('p19p1d', IntegerType::class)
    	->add('p19p1e', ChoiceType::class, $datas->getChoices_1_10())
    	->add('p19p2a', IntegerType::class)
    	->add('p19p2b', IntegerType::class)
    	->add('p19p2c', IntegerType::class)
    	->add('p19p2d', IntegerType::class)
    	->add('p19p2e', ChoiceType::class, $datas->getChoices_1_10())
    	->add('p19p3a', IntegerType::class)
    	->add('p19p3b', IntegerType::class)
    	->add('p19p3c', IntegerType::class)
    	->add('p19p3d', IntegerType::class)
    	->add('p19p3e', ChoiceType::class, $datas->getChoices_1_10())
    	//pregunta20
    	->add('p20', ChoiceType::class, $datas->getChoices_p20())
    	//pregunta21
    	->add('p21a', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p21b', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p21c', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p21d', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p21e', ChoiceType::class, $datas->getChoices_1_5())
       	->getForm();
    	
    	$form->handleRequest($request);
    	
    	//if we are getting datas with our form
    	if ($form->isSubmitted() && $form->isValid()) {
    		/*$formobject->setA($form->get('a')->getData());*/
    		$formobject = $form->getData();
    		   		
    		// retrieve $_POST variables for Pregunta4, Pregunta15, Pregunta20
    		$form4texto = $request->request->get('p4texto');
    		$form15texto = $request->request->get('p15texto');
    		$p17texto = $request->request->get('p17texto');
    		$p17otro = $request->request->get('p17otro');
    		$p18texto = $request->request->get('p18texto');
    		$p18otro = $request->request->get('p18otro');
    		$form20texto = $request->request->get('p20texto');
    		
    		if ($form4texto) $formobject->setP4($form4texto);
    		if ($form15texto) $formobject->setP15($form15texto);
    		if ($form20texto) $formobject->setP20($form20texto);
    		
    		$p17textoStr = "";
    		$p18textoStr = "";

    		//Pregunta17
    		if ($p17texto) {
	    		foreach ($p17texto as $p17textoItem) {
	    			if ($p17textoItem) {
	    				$p17textoStr .= trim($p17textoItem).". ";
	    			}
	    		}
    			$formobject->setP17texto($p17textoStr);
    		}
    		
    		//Pregunta18
    		if ($p18texto) {
	    		foreach ($p18texto as $p18textoItem) {
	    			if ($p18textoItem) {
	    				$p18textoStr .= trim($p18textoItem).". ";
	    			}
	    		}
	    		$formobject->setP18texto($p18textoStr);
    		}
    		    		
    		//working with DB
    		$formobject->setUserid($user->getId());
    		$em = $this->getDoctrine()->getManager();
    		
    		//If user already has record in Form table, 
    		$isUserInDB = $this->getDoctrine()
    		->getRepository('AppBundle:Form')
    		->findOneBy(array('userid' => $user->getId()));
    		
    		//then we want to delete it for further refreshing
    		if ($isUserInDB) {
    			$formField = $this->getDoctrine()
    			->getRepository('AppBundle:Form')
    			->findOneBy(array('userid' => $user->getId()));
    			
    			$em->remove($formField);
    			$em->flush();
    		} 
    		
    		//persist data in DB
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($formobject);
    		$em->flush();
    		    			
    		/*return $this->render('default/index.html.twig', array(
    				'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
    		));*/
    		//return new Response(var_dump($formobject->getP17texto()));
    		
    		return $this->render('default/verificar1.html.twig', array(
    		 	'form' => $formobject,
    			'username' => $user->getNombre(),
    			'titulos' => $datas->getTitulos_f1(),
    			'noaplica' => $datas->getNo_aplica_html(),
    		 ));
    	}
    	
    	return $this->render('default/cuantitativo.html.twig', array(
    			'form' => $form->createView(),
    			'username' => $user->getNombre(),
    			'user' => $user,
    			'titulos' => $datas->getTitulos_f1(),
    	));
    }

    /**
     * @Route("/cualitativo", name="cualitativo")
     */
    public function form2Action(Request $request)
    {
    	//check if user is logged
    	if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
    		throw $this->createAccessDeniedException();
    	}
    	 
    	// if user is logged, $user get user's object
    	$user = $this->get('security.token_storage')->getToken()->getUser();
    
    	//if user already filled up the formulario he goes to "you cant edit form again" page
    	if (!($user->getIsactive())) {
    		return $this->render('default/nocorrejir.html.twig', array(
    				'username' => $user->getNombre(),
    		));
    	}
    
    	// create an object of arrays of choices
    	$datas = new Datas();
    
    	// create an object of class of each DBtable with questions
    	$formobject = new Form1();
    	 
    	// create a form
    	$form = $this->createFormBuilder($formobject)
    	//pregunta1
    	->add('p1', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p2', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p3', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p4', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p5', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p6', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p7', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p8', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p9', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p10', ChoiceType::class, $datas->getChoices_1_5())
    	->add('p11', ChoiceType::class, $datas->getChoices_1_5())
    	->getForm();
    	 
    	$form->handleRequest($request);
    	 
    	//if we are getting datas with our form
    	if ($form->isSubmitted() && $form->isValid()) {
    		/*$formobject->setA($form->get('a')->getData());*/
    		$formobject = $form->getData();
    
    		//working with DB
    		$formobject->setUserid($user->getId());
    		$em = $this->getDoctrine()->getManager();
    
    		//If user already has record in Form table,
    		$isUserInDB = $this->getDoctrine()
    		->getRepository('AppBundle:Form1')
    		->findOneBy(array('userid' => $user->getId()));
    
    		//then we want to delete it for further refreshing
    		if ($isUserInDB) {
    			$formField = $this->getDoctrine()
    			->getRepository('AppBundle:Form1')
    			->findOneBy(array('userid' => $user->getId()));
    			 
    			$em->remove($formField);
    			$em->flush();
    		}
    
    		//persist data in DB
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($formobject);
    		$em->flush();
    		 
    		return $this->render('default/verificar2.html.twig', array(
    				'formobject' => var_dump($formobject),
    				'username' => $user->getNombre(),
    		));
    	}
    	 
    	return $this->render('default/cualitativo.html.twig', array(
    			'form' => $form->createView(),
    			'username' => $user->getNombre(),
    			'titulos' => $datas->getTitulos(),
    	));
    }
    
}
