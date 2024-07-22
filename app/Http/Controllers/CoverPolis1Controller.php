<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class CoverPolis1Controller extends Controller
{
    public function index()
    {
        return view('coverpolis.coverpolis1', ["title" => "COVER POLIS (ASG - BG - GPA)"]);
    }

    public function cetakpdf()
    {
        $title = ["title" => "COVER POLIS (ASG - BG - GPA)"];
        $pdf = PDF::loadview('coverpolis.coverpolis1_pdf', $title);
        return $pdf->stream('COVER POLIS (ASG - BG - GPA).pdf');
    }
}
