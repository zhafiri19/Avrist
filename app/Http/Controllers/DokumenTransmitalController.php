<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class DokumenTransmitalController extends Controller
{
    public function index()
    {
        return view('transmital.transmitaladdress', ["title" => "Transmital  Address"]);
    }

    public function cetakpdf()
    {

        $title = ["title" => "Transmital  Address"];
        $pdf = PDF::loadview('transmital.transmitaladdress_pdf', $title);
        return $pdf->stream('Transmital  Address.pdf');
    }

    public function transmitallist()
    {
        return view('transmital.transmitallist', ["title" => "Transmital  List"]);
    }

    public function cetakpdf2()
    {

        $title = ["title" => "Transmital  List"];
        $pdf = PDF::loadview('transmital.transmitallist_pdf', $title);
        return $pdf->stream('Transmital  List.pdf');
    }
}
