<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extensions\CustomTCPDF;

class KDPController extends Controller
{
    public function showPDFForm()
    {
        return view('index');
    }

    public function generatePDF(Request $request)
    {
        $content = $request->input('content');
        $imageUrl = $request->input('image_url');

        $pdf = new CustomTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Roshan Kumar');
        $pdf->SetTitle('KDP Printable Book');
        $pdf->SetSubject('KDP Printable Book');
        $pdf->SetKeywords('KDP, PDF, Laravel');

        $pdf->SetMargins(0, 0, 0);
        $pdf->SetHeaderMargin(0);
        $pdf->SetFooterMargin(0);

        $pdf->AddPage();
        $pdf->SetHeaderMargin(0);
        if (!empty($imageUrl)) {
            $pdf->Image($imageUrl, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
        }

        // Add content for content pages
        for ($i = 1; $i <= 10; $i++) {
            $pdf->AddPage();
            $pdf->SetHeaderMargin(0);
            $pdf->writeHTML('<h1>Page ' . $i . '</h1><p>' . $content . '</p>', true, false, true, false, '');
        }
        $pdf->AddPage();

        $pdf->writeHTML('<h1 style="text-align: center;">Back Cover</h1>', true, false, true, false, '');
        $pdf->Output('kdp_printable_book.pdf', 'I');
    }
}
