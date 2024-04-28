<?php

namespace App\Extensions;

use TCPDF;

class CustomTCPDF extends TCPDF
{
    // Page header
    // public function Header()
    // {
    //     // Set font
    //     $this->SetFont('helvetica', 'B', 12);

    //     // Add the header text
    //     $headerText = 'KDP Printable Book';
    //     $this->Cell(0, 10, $headerText, 0, false, 'C', 0, '', 0, false, 'T', 'M');
    // }

    // Page footer
    public function Footer()
    {
        // Set font
        $this->SetFont('helvetica', 'I', 8);

        // Position at 15 mm from bottom
        $this->SetY(-15);

        // Add the footer text
        $footerText = 'Head Office: YOUBOOKS EDTECH PTE LTD. 808 French Road, #05-151, Kitchner Complex Singapore (200808). © BriBooks is a registered Trademark of Youbooks EdTech Pte. Ltd. Page '.$this->getAliasNumPage().' of '.$this->getAliasNbPages();
        $this->Cell(0, 10, $footerText, 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
