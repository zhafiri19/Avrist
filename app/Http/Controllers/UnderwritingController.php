<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class UnderwritingController extends Controller
{
    public function cetakpdf()
    {

        $title = ["title" => "Endorsement"];
        $pdf = PDF::loadview('underwriting.tarikan-report-claim-dan-premium-per-polis-Code-ID.claim-ratio_pdf', $title);
        return $pdf->stream('Claim Ratio.pdf');
    }
}
