<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class EndorsementController extends Controller
{

    public function cetakpdf()
    {

        $title = ["title" => "Endorsement"];
        $pdf = PDF::loadview('endorsement.endorsement_pdf', $title);
        return $pdf->stream('Endorsement.pdf');
    }
}
