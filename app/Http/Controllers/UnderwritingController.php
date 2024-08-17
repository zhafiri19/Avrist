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

        $title = ["title" => "Claim Ratio"];
        $pdf = PDF::loadview('underwriting.tarikan-report-claim-dan-premium-per-polis-Code-ID.claimratio_pdf', $title)->setPaper('A4', 'Landscape');
        return $pdf->stream('Claim Ratio.pdf');
    }
    public function cetakpdf2()
    {

        $title = ["title" => "Summary"];
        $pdf = PDF::loadview('underwriting.tarikan-report-claim-dan-premium-per-polis-Code-ID.summary_pdf', $title)->setPaper('A4', 'Landscape');
        return $pdf->stream('Summary.pdf');
    }
    public function cetakpdf3()
    {

        $title = ["title" => "Detail Claim"];
        $pdf = PDF::loadview('underwriting.tarikan-report-claim-dan-premium-per-polis-Code-ID.detailclaim_pdf', $title)->setPaper('legal', 'Landscape');
        return $pdf->stream('Detail Claim.pdf');
    }
}
