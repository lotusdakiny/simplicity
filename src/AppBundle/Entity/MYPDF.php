<?php

namespace AppBundle\Entity;

use TCPDF;

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		// Logo
		//$this->Image('img/cabecera.jpg', '', '', 40, 40, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
		$this->Image('img/cabecera.jpg', '', '3', 190, 33, '', '', 'T', false, 300, '', false, false, 0, false, false, false);
		//$this->Image($image_file, 10, 10, 200, '', 'JPG', '', 'T', false, 300, '', false, true, 0, true, false, false);
		// Set font
		$this->SetFont('helvetica', 'B', 20);
		// Title
		$this->Cell(0, 30, false, 0, false, 'C', 0, '', 0, false, 'M', 'M');
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		/*$this->Image('img/pie.jpg', '', '277', 190, 10, '', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, '', 0, false, 'C', 0, '', 0, false, 'T', 'M');*/
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, utf8_encode('Proyecto Simplicity, una iniciativa científica de Gilead. Página ').$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
		//$this->Cell(0, 10, utf8_encode('Proyecto Simplicity, una iniciativa científica de Gilead'), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}