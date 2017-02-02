<?php

namespace AppBundle\Entity;

class Datas
{ 
	private $choices_1_4 = array();
	private $choices_1_5 = array();
	private $choices_1_5_noaplica = array();
    private	$choices_1_10 = array();
    	
	private $choices_p4 = array();
	private $choices_p7 = array();
    private $choices_p9 = array();
	private	$choices_p10 = array();
	private $choices_p12 = array();
	private $choices_p14 = array();
	private $choices_p15 = array();
	private $choices_p16 = array();
	private $choices_p20 = array();
	
	private $choices_si_no = array();
	private $choices_si_no_novalorado = array();
	private	$choices_dos_cinco = array();
	private $choices_minutos = array();
	
	private $titulos_f1 = array();
	private $titulos_f2 = array();
	private $choices_esp = array();
	private $email = array();
	
	private $noaplica;
	private $noaplica_html;
	private $noaplica_pdf;
	
	public function getChoices_1_4()
	{
		$choices_1_4 = array(
				'choices'  => array(
						'1' => 1,
						'2' => 2,
						'3' => 3,
						'4' => 4,
				),
				'multiple'=>false,
				'expanded'=>true,
		);
	
		return $choices_1_4;
	}
	
	public function getChoices_1_5()
	{
		$choices_1_5 = array(
			'choices'  => array(
					'1' => 1,
					'2' => 2,
					'3' => 3,
					'4' => 4,
					'5' => 5,					
			),
			'multiple'=>false,
			'expanded'=>true,
		);
		
		return $choices_1_5;
	}
	
	public function getChoices_1_5_noaplica()
	{
		$choices_1_5_noaplica = array(
				'choices'  => array(
						'1' => '1',
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
						$this->getNo_aplica() => $this->getNo_aplica(),
				),
				'multiple'=>false,
				'expanded'=>true
		);
	
		return $choices_1_5_noaplica;
	}
	
	public function getChoices_1_10()
	{
		$choices_1_10 = array(
    			'choices'  => array(
    					'1' => 1,
    					'2' => 2,
    					'3' => 3,
    					'4' => 4,
    					'5' => 5,
    					'6' => 6,
    					'7' => 7,
    					'8' => 8,
    					'9' => 9,
    					'10' => 10,
    			),
    			'multiple'=>false,
    			'expanded'=>false
    		);
		
		return $choices_1_10;
	}
	
	public function getChoices_si_no()
	{
		$choices_si_no = array('choices' => array(
				utf8_encode('S�') => utf8_encode('S�'),
				'No' => 'No',
				$this->getNo_aplica() => $this->getNo_aplica(),
			), 'multiple'=>false, 'expanded'=>true
		);
		
		return $choices_si_no;
	}
	
	public function getChoices_si_no_novalorado()
	{
		$choices_si_no_novalorado = array('choices' => array(
				utf8_encode('S�') => utf8_encode('S�'),
				'No' => 'No',
				utf8_encode('No he valorado este �tem hasta ahora') => utf8_encode('No he valorado este �tem hasta ahora'),
				$this->getNo_aplica() => $this->getNo_aplica(),
		), 'multiple'=>false, 'expanded'=>true
		);
	
		return $choices_si_no_novalorado;
	}
	
	public function getChoices_p4()
	{
		$choices_p4 = array(
				'choices'  => array(
						'Nunca.' => 'A',
						'Siempre.' => 'B',
						utf8_encode('Solo en el entorno de un estudio cl�nico.') => 'C',
						utf8_encode('En algunas ocasiones, como') => 'D',
						$this->getNo_aplica() => 'E',
				), 'multiple'=>false,'expanded'=>true
		);
		
		return $choices_p4;
	}
	
	public function getChoices_p7()
	{
		$choices_p7 = array(
    			'choices'  => array(
    					'0-15%' => '0-15%',
    					'16-30%' => '16-30%',
    					'31-45%' => '31-45%',
    					'>45%' => '>45%',
    					$this->getNo_aplica() => $this->getNo_aplica(),
    			), 'multiple'=>false,'expanded'=>true
		);
		return $choices_p7;
	}
	
	public function getChoices_p9()
	{	
		$choices_p9 = array(
    			'choices'  => array(
    					'No' => 'No',
    					$this->getNo_aplica() => $this->getNo_aplica(),
    					'Menor del 1%' => 'A',
    					'Entre un 1 y un 5%' => 'B',
    					'Entre un 6 y un 10%' => 'C',
    					'Superior al 10%' => 'D',
    				), 
				'multiple'=>false,
				'expanded'=>true,
		);
		return $choices_p9;
	}
	
	public function getChoices_p10()
	{
		$choices_p10 = array(
    			'choices'  => array(
    					'0-20%' => '0-20%',
    					'21-40%' => '21-40%',
    					'41-60%' => '41-60%',
    					'>60%' => '>60%',
    					), 
    			'multiple'=>false,
    			'expanded'=>true
    	);
		return $choices_p10;
	}
	
	public function getChoices_p12()
	{
		$choices_p12 = array(
				'choices'  => array(
						'Menos de un 15%' => 'A',
						'entre un 15 y un 29%' => 'B',
						'entre un 30 y un 50%' => 'C',
						utf8_encode('M�s de un 50% de sus pacientes') => 'D',
						$this->getNo_aplica() => 'E',
				), 'multiple'=>false,'expanded'=>true
		);
	
		return $choices_p12;
	}	
		
	public function getChoices_p14()
	{
		$choices_p14 = array(
    			'choices'  => array(
    					'Menos de un 10%' => 'A',
    					'Entre un 10 y un 20%' => 'B',
    					'Entre un 21 y un 30%' => 'C',
    					utf8_encode('M�s de un 30%') => 'D',
    					$this->getNo_aplica() => 'E',
    			), 'multiple'=>false,'expanded'=>true
			);
		
		return $choices_p14;
	}
	
	public function getChoices_p15()
	{
		$choices_p15 = array(
    			'choices'  => array(
    					'RVS12.' => 'A',
    					'RVS24.' => 'B',
    					utf8_encode('Otras:') => 'C',
    					$this->getNo_aplica() => 'D',
    			), 'multiple'=>false,'expanded'=>true
		);
		
		return $choices_p15;
	}
	
	public function getChoices_p16()
	{
		$choices_p16 = array(
				'choices'  => array(
						'Menos de un 10%' => 'A',
						'Entre un 10 y un 20%' => 'B',
						'Entre un 21 y un 50%' => 'C',
						utf8_encode('M�s de un 50%') => 'D',
						$this->getNo_aplica() => 'E',
				), 'multiple'=>false,'expanded'=>true
			);
		
		return $choices_p16;
	}
	
	public function getChoices_p20()
	{
		$choices_20 = array(
    			'choices'  => array(
    					utf8_encode('Se les aconseja un seguimiento indefinido mediante ecograf�a y an�lisis cada 3 meses en la consulta hospitalaria.') => 'A',
    					utf8_encode('Se les aconseja un seguimiento indefinido mediante ecograf�a y an�lisis cada 6 meses en la consulta hospitalaria.') => 'B',
    					utf8_encode('Se les aconseja un seguimiento indefinido mediante ecograf�a y an�lisis cada 12 meses en la consulta hospitalaria.') => 'C',
    					utf8_encode('Ninguna de las anteriores (especifique cu�l es su pr�ctica habitual):') => 'D',
    					$this->getNo_aplica() => 'E',
    			), 'multiple'=>false,'expanded'=>true
			);
		
		return $choices_20;
	}
	
	public function getChoices_dos_cinco()
	{
		$choices_dos_cinco = array(
    			'choices'  => array(
    					'Dos consultas' => 'Dos consultas',
    					'Tres consultas' => 'Tres consultas',
    					'Cuatro consultas' => 'Cuatro consultas',
    					'Cinco consultas' => 'Cinco consultas',
    					), 'multiple'=>false,'expanded'=>true
    		);
		return $choices_dos_cinco;
	}
	
	public function getChoices_minutos()
	{
		$choices_minutos = array(
    			'choices'  => array(
    					'5'  => '5 minutos',
    					'10' => '10 minutos',
    					'15' => '15 minutos',
    					'20' => '20 minutos',
    					'25' => '25 minutos',
    					'30' => '30 minutos',
    			),
    			'multiple'=>false,
    			'expanded'=>false
    		);
		return $choices_minutos;
	}
	
	public function getChoices_esp()
	{
		$especialidad = array(
				'choices'  => array(
					utf8_encode('M�dico Especialista')=>utf8_encode('M�dico Especialista'),
					utf8_encode('Farmacia')=>utf8_encode('Farmacia'),
					utf8_encode('Enfermer�a')=>utf8_encode('Enfermer�a'),
					utf8_encode('Atenci�n Primaria')=>utf8_encode('Atenci�n Primaria'),
					/*utf8_encode('Centro de Adicciones')=>utf8_encode('Centro de Adicciones'),
					utf8_encode('Farmacia Hospitalaria')=>utf8_encode('Farmacia Hospitalaria'),
					utf8_encode('Enfermer�a')=>utf8_encode('Enfermer�a'),
					utf8_encode('Econom�a de la Salud')=>utf8_encode('Econom�a de la Salud'),
					utf8_encode('Otros')=>utf8_encode('Otros'),*/
				),
				'multiple'=>false,
				'expanded'=>false
		);
		return $especialidad;
	}
	
	public function getEmail()
	{
		$email = array(
				'subject-new-password' => utf8_encode('Nueva contrase�a'),
				'subject-result' => utf8_encode('Cuestionario Simplicity Respuestas'),
				'subject-bienvenido' => utf8_encode('Proyecto Simplicity Cuestionario'),
				'body-bienvenido' => utf8_encode('<p>Experto/a. ,</p>
    				<p>Adjunto a este e-mail puede encontrar un resumen de sus respuestas al cuestionario. </p>
					<p>Muchas gracias,</p>
					<p>Proyecto Simplicity<br>una iniciativa cient�fica de Gilead 
						'),
				//'from' => array('info@proyectosimplicity.es' => 'Proyecto Simplicity'),
				'from' => array('simplicity@clover-sgm.es' => 'Proyecto Simplicity'),
				'firma' => utf8_encode('Proyecto Simplicity<br>una iniciativa cient�fica de Gilead'),
		);
		return $email;
	}
	
	public function getNo_aplica()
	{
		$no_aplica = 'No aplica';
		return $no_aplica;
	}
	
	public function getNo_aplica_html()
	{
		$no_aplica_html = '	
					<div class="form-group">
						<div class="col-xs-12">
							<label class="radio-inline"">
								<img src="img/bullet.png" alt="selecci&oacute;n">
								<span>No aplica</span>
							</label>
						</div>
					</div>
				';
		return $no_aplica_html;
	}
	
	public function getNo_aplica_pdf()
	{
		$no_aplica_pdf = '<strong>No aplica</strong>';
		return $no_aplica_pdf;
	}
	
	public function getTitulos_f1()
	{
		$titulos_f1 = array(
				'p1'=>utf8_encode('En su experiencia cl�nica, valore la influencia de los siguientes factores en la <strong>adherencia al tratamiento</strong> con los actuales antivirales de acci�n directa (AADs). (Siendo: 1.Nada influyente; 2.Poco influyente; 3.Moderadamente influyente; 4. Bastante influyente y 5. Muy influyente)'),
				'p1a'=>utf8_encode('Efectos adversos del tratamiento.'),
				'p1b'=>utf8_encode('Duraci�n del tratamiento.'),
				'p1c'=>utf8_encode('N�mero de comprimidos.'),
				'p1d'=>utf8_encode('Posolog�a.'),
				'p1e'=>utf8_encode('Polimedicaci�n.'),
				'p1f'=>utf8_encode('Factores psico-sociales del paciente (s�ntomas depresivos, adicci�n a drogas, problemas econ�micos...).'),
				'p2'=>utf8_encode('De sus pacientes que <strong>no han alcanzado la curaci�n</strong> con los actuales AADs, por favor, indique porcentualmente los motivos a los que ha sido debido:'),				
				'p2a'=>utf8_encode('Recidiva.'),
				'p2b'=>utf8_encode('Breakthrough.'),
				'p2c'=>utf8_encode('Discontinuaci�n del tratamiento por efectos adversos.'),
				'p2ca'=>utf8_encode('Cefalea'),
				'p2cb'=>utf8_encode('Fatiga'),
				'p2cc'=>utf8_encode('Hiperbilirrubinemia'),
				'p2cd'=>utf8_encode('Elevaci�n ALT'),
				'p2ce'=>utf8_encode('Prurito'),
				'p2cf'=>utf8_encode('Anemia'),
				'p2cg'=>utf8_encode('Coinfectados con VIH: disminuci�n CD4 o fallo virol�gico del VIH'),
				'p2ch'=>utf8_encode('Otros motivos.'),
				'p2d'=>utf8_encode('Decisi�n de discontinuaci�n del tratamiento por el paciente.'),
				'p2e'=>utf8_encode('Discontinuaci�n de tratamiento debido a otros motivos.'),
				'p2texto'=>utf8_encode('Describa cu�les:'),
				'p3'=>utf8_encode('Valore el <strong>grado de incumplimiento al tratamiento</strong> de los siguientes colectivos de pacientes con hepatitis C cr�nica. (Siendo: 1. Muy cumplidor; 2. Bastante cumplidor; 3. Moderadamente cumplidor; 4. Bastante incumplidor; 5. Muy incumplidor)'),
				'p3a'=>utf8_encode('Coinfectados VIH y VHC.'),
				'p3b'=>utf8_encode('Alcoh�licos.'),
				'p3c'=>utf8_encode('Adictos a drogas i.v.'),
				'p3d'=>utf8_encode('Adictos a otras drogas de abuso.'),
				'p3e'=>utf8_encode('Pacientes con enfermedad hep�tica poco avanzada (F0-F2).'),
				'p3f'=>utf8_encode('Polimedicados.'),
				'p3g'=>utf8_encode('Institucionalizados.'),
				'p3h'=>utf8_encode('Con comorbilidad psiqui�trica.'),
				'p3i'=>utf8_encode('Edad avanzada (>65 a�os).'),
				'p3j'=>utf8_encode('Pacientes sin recursos (indigentes).'),
				'p3k'=>utf8_encode('Trabajadores del sexo.'),
				'p3l'=>utf8_encode('Otros colectivos (ej, MSM, etc.).'),
				'p4'=>utf8_encode('Se�ale con qu� frecuencia emplea los <strong>cuestionarios y escalas</strong> para medir la <strong>calidad de vida</strong> de los pacientes con hepatitis C cr�nica.'),
				'p5'=>utf8_encode('Punt�e el grado de <strong>mejor�a en la calidad de vida</strong> observado en sus pacientes tratados con los actuales AADs y que han alcanzado respuesta viral sostenida con enfermedad leve-moderada (1 no mejor�a, 5 m�xima mejor�a).'),
				'p6'=>utf8_encode('Punt�e el grado de <strong>mejor�a en la calidad de vida</strong> observado en sus pacientes tratados con los actuales AADs y que han alcanzado respuesta viral sostenida con enfermedad avanzada (1 no mejor�a, 5 m�xima mejor�a).'),
				'p7'=>utf8_encode('�Qu� porcentaje de sus pacientes ha necesitado una baja laboral durante el tratamiento con los actuales AADs?'),
				'p8'=>utf8_encode('El <strong>presentismo laboral</strong> se define como la p�rdida de productividad en el propio trabajo como resultado de una enfermedad, <strong>�ha mejorado con los actuales AADs en sus pacientes con hepatitis C?</strong>'),
				'p9'=>utf8_encode('�Ha precisado alg�n paciente <strong>atenci�n psiqui�trica o f�rmacos psicotr�picos</strong> a consecuencia del tratamiento con los actuales AADs?'),
				'p10'=>utf8_encode('Respecto a la <strong>presencia de fatiga:</strong>'),
				'p10a'=>utf8_encode('�Qu� porcentaje de sus pacientes presentan <strong>fatiga antes de iniciar tratamiento</strong> con actuales AADs?:'),
				'p10b'=>utf8_encode('�Qu� porcentaje de sus pacientes con fatiga <strong>mejoran durante el tratamiento?</strong>'),
				'p10c'=>utf8_encode('�Qu� porcentaje de sus pacientes con fatiga basal, <strong>presentan mejor�a tras alcanzar RVS12?</strong>'),
				'p11'=>utf8_encode('En base a su experiencia cl�nica, valore la <strong>mejor�a en la calidad de vida en cada uno</strong> de estos grupos de pacientes <strong>tras alcanzar RVS12</strong> con los actuales AADs. (Siendo: 1. Ninguna mejor�a; 2. Poca mejor�a; 3. Alguna mejor�a; 4.Bastante mejor�a; 5. M�xima mejor�a)'),
				'p11a'=>utf8_encode('Pacientes con cirrosis descompensada o en lista de espera para un trasplante hep�tico.'),
				'p11b'=>utf8_encode('Pacientes con fibrosis avanzada F3-F4 pero sin enfermedad descompensada.'),
				'p11c'=>utf8_encode('Pacientes con fibrosis leve-moderada F0-F1 y F2.'),
				'p11d'=>utf8_encode('Pacientes con manifestaciones extrahep�ticas.'),
				'p12'=>utf8_encode('�Cu�ntos de sus <strong>pacientes en tratamiento</strong> para hepatitis C cr�nica, a d�a de hoy, <strong>reciben un nucle�sido sint�tico</strong> (an�logo de guanosina, con amplio espectro de acci�n frente a los virus)?'),
				'p13'=>utf8_encode('Los actuales AADs han <strong>simplificado el diagn�stico y la evaluaci�n de la hepatitis C</strong> cr�nica. Indique en qu� medida son necesarias las siguientes <strong>determinaciones antes del inicio de este tratamiento.</strong> (Siendo: 1. No necesaria; 2. Se puede considerar; 3. Conveniente; 4. Imprescindible)'),
				'p13a'=>utf8_encode('Determinaci�n de polimorfismos del gen de la interleuquina IL28B.'),
				'p13b'=>utf8_encode('Fibroscan.'),
				'p13c'=>utf8_encode('Ecograf�a abdominal.'),
				'p13d'=>utf8_encode('Determinaci�n del genotipo del VHC.'),
				'p13e'=>utf8_encode('Determinaci�n del subtipo del genotipo.'),
				'p13f'=>utf8_encode('Determinaci�n de la carga viral del VHC.'),
				'p13g'=>utf8_encode('Determinaci�n de las RAVs basales.'),
				'p13h'=>utf8_encode('Determinaci�n de RAVs tras fracaso con AADs.'),
				'p13i'=>utf8_encode('Determinaci�n de la funci�n hep�tica.'),
				'p14'=>utf8_encode('�Qu� porcentaje de sus pacientes <strong>en lista de espera para trasplante hep�tico ha abandonado la lista</strong> tras recibir tratamiento con los actuales AADs?'),
				'p15'=>utf8_encode('�Cu�ndo considera posible dar el <strong>alta</strong> a los pacientes con <strong>fibrosis leve-moderada</strong> tratados con los actuales AADs?'),
				'p16'=>utf8_encode('En su experiencia cl�nica: �qu� porcentaje de <strong>pacientes monoinfectados</strong> que han alcanzado RVS12 han sido dados de <strong>alta definitivamente</strong> de su consulta hospitalaria desde que comenz� el tratamiento con los actuales AADs?'),
				'p17'=>utf8_encode('�Cu�l es el <strong>promedio de consultas</strong> a las que acude un paciente que recibe <strong>12 semanas</strong> con los actuales AADs?'),
				'p17p18'=>utf8_encode('(Elegir entre esta terminolog�a: basal, semana 4, Final de tratamiento (EOT), RVS12 o RVS24. Si otra especificar)'),
				'p18'=>utf8_encode('�Y el <strong>promedio de consultas</strong> en el caso de una pauta de <strong>8 semanas</strong> de tratamiento?'),
				'p19'=>utf8_encode('Sobre los <strong>�ltimos 3 pacientes</strong> en los que ha iniciado tratamiento con AADs, indique el tiempo empleado (especificar <strong>minutos de dedicaci�n</strong> en cada apartado):'),
				'p19p1a'=>utf8_encode('Duraci�n de la consulta:'),
				'p19p1b'=>utf8_encode('Tiempo destinado a analizar el perfil del paciente para la elecci�n del tratamiento:'),
				'p19p1c'=>utf8_encode('Tiempo destinado a analizar las posibles interacciones farmacol�gicas:'),
				'p19p1d'=>utf8_encode('Tiempo destinado por alguien de la Unidad a explicar al paciente o familiares c�mo tomar el r�gimen:'),
				'p19p1e'=>utf8_encode('N�mero de comprimidos que contiene el r�gimen prescrito:'),
				'p19p2a'=>utf8_encode('Duraci�n de la consulta:'),
				'p19p2b'=>utf8_encode('Tiempo destinado a analizar el perfil del paciente para la elecci�n del tratamiento:'),
				'p19p2c'=>utf8_encode('Tiempo destinado a analizar las posibles interacciones farmacol�gicas:'),
				'p19p2d'=>utf8_encode('Tiempo destinado por alguien de la Unidad a explicar al paciente o familiares c�mo tomar el r�gimen:'),
				'p19p2e'=>utf8_encode('N�mero de comprimidos que contiene el r�gimen prescrito:'),
				'p19p3a'=>utf8_encode('Duraci�n de la consulta:'),
				'p19p3b'=>utf8_encode('Tiempo destinado a analizar el perfil del paciente para la elecci�n del tratamiento:'),
				'p19p3c'=>utf8_encode('Tiempo destinado a analizar las posibles interacciones farmacol�gicas:'),
				'p19p3d'=>utf8_encode('Tiempo destinado por alguien de la Unidad a explicar al paciente o familiares c�mo tomar el r�gimen:'),
				'p19p3e'=>utf8_encode('N�mero de comprimidos que contiene el r�gimen prescrito:'),
				'p20'=>utf8_encode('Respecto al <strong>seguimiento</strong> de los pacientes con <strong>fibrosis avanzada o cirrosis</strong> que han alcanzado RVS12 tras el tratamiento con los actuales AADs. Se�ale cu�l es su pr�ctica habitual:'),
				'p21'=>utf8_encode('Valore el <strong>beneficio de la simplificaci�n</strong> asociado a los actuales tratamientos con AADs en los siguientes aspectos. (Siendo: 1.Ning�n beneficio; 2. Poco beneficio; 3. Alg�n beneficio; 4.Bastante beneficio; 5. M�ximo beneficio)'),
				'p21a'=>utf8_encode('Manejo y abordaje del paciente.'),
				'p21b'=>utf8_encode('Adherencia al tratamiento.'),
				'p21c'=>utf8_encode('Calidad de vida de los pacientes.'),
				'p21d'=>utf8_encode('Costes y recursos asistenciales.'),
				'p21e'=>utf8_encode('Profesional sanitario.'),
		);
		return $titulos_f1;
	}
	
	public function getTitulos_f2()
	{
		$titulos_f2 = array(
				'1'=>utf8_encode('Los tratamiento con AAD basados en reg�menes de baja complejidad favorecen el cumplimiento del tratamiento en los pacientes de alto riesgo de no adherencia.'),
				'2'=>utf8_encode('La simplicidad de los tratamientos conlleva mejores niveles de adherencia y mejores resultados en salud.'),
				'3'=>utf8_encode('La adici�n de RBV a los tratamientos actuales, en general no aporta beneficios y aumenta el riesgo de aparici�n de efectos adversos.'),
				'4'=>utf8_encode('La simplicidad y tolerabilidad de los tratamientos actuales con AAD, permite su administraci�n en pacientes que hasta ahora no se trataban.'),
				'5'=>utf8_encode('Los escasos efectos adversos de los tratamientos actuales pueden ser percibidos de forma diferente seg�n el perfil de los pacientes que son evaluados en las consultas en la actualidad.'),
				'6'=>utf8_encode('Un tratamiento con bajo n�mero de comprimidos y con una �nica toma al d�a facilitar�a la adherencia del paciente tanto al tratamiento del VHC como al tratamiento de otras comorbilidades que pueda presentar el paciente.'),
				'7'=>utf8_encode('Las comorbilidades, la medicaci�n concomitante y las posibles interacciones son factores importantes a la hora de seleccionar el tratamiento m�s adecuado en un paciente con hepatitis C.'),
				'8'=>utf8_encode('La necesidad de modificar el tratamiento cr�nico (medicamento, dosis, frecuencia�) de un paciente por posible interacci�n con la terapia para VHC influye en la adherencia a uno o ambos tratamientos.'),
				'9'=>utf8_encode('Las creencias de los pacientes sobre las causas, significado de la enfermedad y la motivaci�n para seguir el tratamiento afectan a la adherencia.'),
				'10'=>utf8_encode('Con los nuevos AAD es posible tratar a personas usuarias de drogas y/o alcohol sin que se vea afectada la adherencia.'),
				'11'=>utf8_encode('Con los AAD sigue siendo necesaria la evaluaci�n psicosocial en pacientes con riesgo de baja adherencia (edad muy avanzada, creencias o motivaciones err�neas relacionadas con la terapia, baja cultura sanitaria, mala relaci�n con el equipo asistencial, informaci�n no comprensible�).'),
		);
		return $titulos_f2;
	}
}