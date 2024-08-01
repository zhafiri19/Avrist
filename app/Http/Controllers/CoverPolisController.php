<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class CoverPolisController extends Controller
{
    public function cetakpdf()
    {
        $title = ["title" => "COVER POLIS (ASG - BG - GPA)"];
        $pdf = PDF::loadview('coverpolis.coverpolis1_pdf', $title);
        return $pdf->stream('COVER POLIS (ASG - BG - GPA).pdf');
    }

    public function cetakpdf2()
    {
        $title = ["title" => "COVER POLIS (GHS - LIFE)"];
        $pdf = PDF::loadView('coverpolis.coverpolis2_pdf', $title);
        return $pdf->stream('COVER POLIS (GHS - LIFE).pdf');
    }
}
