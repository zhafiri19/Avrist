<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class CollectionController extends Controller
{
    public function cetakpdf()
    {
        $title = ["title" => "Reminder Notice Billing"];
        $pdf = PDF::loadview('collection.remindernoticebilling_pdf', $title)->setPaper('Legal', 'portrait');
        return $pdf->stream('Reminder Notice Billing.pdf');
    }
    public function cetakpdf2()
    {
        $title = ["title" => "Report Ageing - Present BOD"];
        $pdf = PDF::loadview('collection.reportageingpresentbod_pdf', $title)->setPaper('Tabloid', 'Portrait');
        return $pdf->stream('Report Ageing - Present BOD.pdf');
    }
    // public function cetakpdf3()
    // {
    //     $title = ["title" => "Reminder Notice Billing"];
    //     $pdf = PDF::loadview('suratmedical.bloodprofileavrist_pdf', $title);
    //     return $pdf->stream('Reminder Notice Billing.pdf');
    // }
    public function cetakpdf4()
    {
        $title = ["title" => "Summary Report Ageing"];
        $pdf = PDF::loadview('collection.summaryreportageing_pdf', $title);
        return $pdf->stream('Summary Report Ageing.pdf');
    }
}
