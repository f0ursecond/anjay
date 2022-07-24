<?php 
    
    require_once("TCPDF/tcpdf.php");
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // set document information
    $pdf->setCreator(PDF_CREATOR);
    $pdf->setAuthor('Alif Zulfanur');
    $pdf->setTitle('Stock Barang Ten Mart');
    $pdf->setSubject('Stock Barang Ten Mart');
    $pdf->setKeywords('Stock Barang Ten Mart');
    
    
    $pdf->setFont('times', '', 11, '', true);
    $pdf->setPrintHeader(false);
    $pdf->AddPage();

    $html = file_get_contents("http://localhost/our/index.php");

    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

    ob_clean();
    $pdf->Output(__DIR__ . 'barang.pdf', 'FI');
 