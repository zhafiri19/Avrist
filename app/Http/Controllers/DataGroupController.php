<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class DataGroupController extends Controller
{
    // Polis Contract yang convent di group hospital 
    public function cetakpdf6()
    {
        $title = ["title" => "POLICY SCHEDULE"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.policyschedule_pdf', $title);
        return $pdf->stream('POLICY SCHEDULE.pdf');
    }

    public function cetakpdf26()
    {
        $title = ["title" => "Surat pengantar billing dan Billing modal atau alteration"];
        $pdf = PDF::loadview('datagroup.billingmodal_pdf', $title)->setPaper('A3', 'Landscape');
        return $pdf->stream('Surat pengantar billing dan Billing modal atau alteration.pdf');
    }

    // public function cetakpdf2()
    // {

    //     $title = ["title" => "Transmital  List"];
    //     $pdf = PDF::loadview('transmital.transmitallist_pdf', $title)->setPaper('a4', 'portrait');
    //     return $pdf->stream('Transmital  List.pdf');
    // }
}
