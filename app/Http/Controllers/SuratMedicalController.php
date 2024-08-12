<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class SuratMedicalController extends Controller
{
    public function cetakpdf()
    {
        $title = ["title" => "Blood Profile Avrist"];
        $pdf = PDF::loadview('suratmedical.bloodprofileavrist_pdf', $title);
        return $pdf->stream('Blood Profile Avrist.pdf');
    }
}
