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
    public function cetakpdf2()
    {
        $title = ["title" => "Approval Letter"];
        $pdf = PDF::loadview('suratmedical.approvalletter_pdf', $title);
        return $pdf->stream('Approval Letter.pdf');
    }
    public function cetakpdf3()
    {
        $title = ["title" => "Decline Letter untuk Member"];
        $pdf = PDF::loadview('suratmedical.declineletteruntukmember_pdf', $title);
        return $pdf->stream('Decline Letter untuk Member.pdf');
    }
    public function cetakpdf4()
    {
        $title = ["title" => "Decline Letter untuk Perusahaan"];
        $pdf = PDF::loadview('suratmedical.declineletteruntukperusahaan_pdf', $title);
        return $pdf->stream('Decline Letter untuk Perusahaan.pdf');
    }
    public function cetakpdf5()
    {
        $title = ["title" => "Follow Up Letter Member"];
        $pdf = PDF::loadview('suratmedical.followuplettermember_pdf', $title);
        return $pdf->stream('Follow Up Letter Member.pdf');
    }
    public function cetakpdf6()
    {
        $title = ["title" => "Follow Up Letter Perusahaan"];
        $pdf = PDF::loadview('suratmedical.followupletterperusahaan_pdf', $title);
        return $pdf->stream('Follow Up Letter Perusahaan.pdf');
    }
    public function cetakpdf7()
    {
        $title = ["title" => "Innitial Letter untuk Member"];
        $pdf = PDF::loadview('suratmedical.innitialletteruntukmember_pdf', $title);
        return $pdf->stream('Innitial Letter untuk Member.pdf');
    }
    public function cetakpdf8()
    {
        $title = ["title" => "Innitial Letter untuk Perusahaan"];
        $pdf = PDF::loadview('suratmedical.innitialletteruntukperusahaan_pdf', $title);
        return $pdf->stream('Innitial Letter untuk Perusahaan.pdf');
    }
    public function cetakpdf9()
    {
        $title = ["title" => "LPK Avrist Dewasa"];
        $pdf = PDF::loadview('suratmedical.lpkavristdewasa_pdf', $title);
        return $pdf->stream('LPK Avrist Dewasa.pdf');
    }
    public function cetakpdf10()
    {
        $title = ["title" => "Rate UP Letter (Surat Penawaran Ekstra Premi)"];
        $pdf = PDF::loadview('suratmedical.rateupletter_pdf', $title);
        return $pdf->stream('Rate UP Letter (Surat Penawaran Ekstra Premi).pdf');
    }
    public function cetakpdf11()
    {
        $title = ["title" => "Surat Penghantar Medis"];
        $pdf = PDF::loadview('suratmedical.suratpenghantarmedis_pdf', $title);
        return $pdf->stream('Surat Penghantar Medis.pdf');
    }
    public function cetakpdf12()
    {
        $title = ["title" => "Limit Letter"];
        $pdf = PDF::loadview('suratmedical.limitletter_pdf', $title);
        return $pdf->stream('Limit Letter.pdf');
    }
    public function cetakpdf13()
    {
        $title = ["title" => "HDF Form"];
        $pdf = PDF::loadview('suratmedical.hdfform_pdf', $title);
        return $pdf->stream('HDF Form.pdf');
    }
}
