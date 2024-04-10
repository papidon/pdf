<?php

require_once 'vendor/autoload.php';

// Create a new instance of the TCPDF class
$pdf = new TCPDF();

// Set the creator of the PDF document. This is typically the name of the application that generates the PDF.
$pdf->SetCreator('PDF Creator');

// Set the author of the PDF document. This can be the name of the person or the organization responsible for creating the content.
$pdf->SetAuthor('Your Name');

// Set the title of the PDF document. This should reflect the content or the purpose of the document.
$pdf->SetTitle('TCPDF Example');

// Set the subject of the PDF document. This provides a brief description or the theme of the content in the document.
$pdf->SetSubject('TCPDF Tutorial');


// Add a new page to the document
$pdf->AddPage();

// Set the font to 'dejavusans', with a size of 12
$pdf->SetFont('dejavusans', '', 12);

// Add text to the page. Parameters define the position and alignment of the text
$text = "Hello, World!";
$pdf->Write(0, $text, '', 0, 'L', true, 0, false, false, 0);
