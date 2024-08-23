<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class UnderwritingController extends Controller
{
    // Contoh tarikan report claim dan premium per polis Code ID
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

    // Template Form Payment Request
    public function cetakpdf4()
    {

        $title = ["title" => "Guidelines"];
        $pdf = PDF::loadview('underwriting.form-payment-request.guidelines_pdf', $title);
        return $pdf->stream('Guidelines.pdf');
    }

    public function cetakpdf5()
    {

        $title = ["title" => "PR v2.1.2022"];
        $pdf = PDF::loadview('underwriting.form-payment-request.PRv212022_pdf', $title)->setPaper('A3', 'Landscape');
        return $pdf->stream('PR v2.1.2022.pdf');
    }

    public function cetakpdf6()
    {

        $title = ["title" => "Perhitungan Profit Sharing"];
        $pdf = PDF::loadview('underwriting.form-payment-request.perhitunganprofitsharing_pdf', $title);
        return $pdf->stream('Perhitungan Profit Sharing.pdf');
    }

    public function cetakpdf7()
    {

        $title = ["title" => "Perhitungan Stop Loss"];
        $pdf = PDF::loadview('underwriting.form-payment-request.perhitunganstoploss_pdf', $title);
        return $pdf->stream('Perhitungan Stop Loss.pdf');
    }

    public function cetakpdf8()
    {

        $title = ["title" => "Statement of Local Loss Free atau LLF"];
        $pdf = PDF::loadview('underwriting.form-payment-request.statementoflocallossfreeataullf_pdf', $title);
        return $pdf->stream('Statement of Local Loss Free atau LLF.pdf');
    }
}
