<?php

require './backend/class.php';



$pdf = new MYPDF();

$pdf->SetCreator('PDF Creator');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Your Document Title');
$pdf->SetSubject('Document Subject');

$pdf->AddPage();

$pdf->SetFont('helvetica', '', 12);

$pdf->Write(0, 'Hello, this is a custom PDF created using TCPDF.', '', 0, 'L', true);

$pdf->Output('your_document.pdf', 'I');



