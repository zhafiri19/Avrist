<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class UnderwritingController extends Controller
{
    public function index()
    {
        return view('endorsement.index', ["title" => "Endorsement"]);
    }

    public function cetakpdf()
    {

        $title = ["title" => "Endorsement"];
        $pdf = PDF::loadview('endorsement.endorsement_pdf', $title);
        return $pdf->stream('Endorsement.pdf');
    }
}
