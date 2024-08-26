<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class DataGroupController extends Controller
{
    // ASO Billing
    public function cetakpdf()
    {
        $title = ["title" => "POLICY SCHEDULE"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.policyschedule_pdf', $title);
        return $pdf->stream('POLICY SCHEDULE.pdf');
    }
    public function cetakpdf2()
    {
        $title = ["title" => "POLICY SCHEDULE"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.policyschedule_pdf', $title);
        return $pdf->stream('POLICY SCHEDULE.pdf');
    }
    public function cetakpdf3()
    {
        $title = ["title" => "POLICY SCHEDULE"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.policyschedule_pdf', $title);
        return $pdf->stream('POLICY SCHEDULE.pdf');
    }
    public function cetakpdf4()
    {
        $title = ["title" => "POLICY SCHEDULE"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.policyschedule_pdf', $title);
        return $pdf->stream('POLICY SCHEDULE.pdf');
    }
    public function cetakpdf5()
    {
        $title = ["title" => "POLICY SCHEDULE"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.policyschedule_pdf', $title);
        return $pdf->stream('POLICY SCHEDULE.pdf');
    }

    // Polis Contract yang convent di group hospital
    public function cetakpdf6()
    {
        $title = ["title" => "POLICY SCHEDULE"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.policyschedule_pdf', $title);
        return $pdf->stream('POLICY SCHEDULE.pdf');
    }
    public function cetakpdf7()
    {
        $title = ["title" => "RIDER  CI"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.riderci_pdf', $title);
        return $pdf->stream('RIDER  CI.pdf');
    }
    public function cetakpdf8()
    {
        $title = ["title" => "RIDER TPD"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.ridertpd_pdf', $title);
        return $pdf->stream('RIDER TPD.pdf');
    }
    public function cetakpdf9()
    {
        $title = ["title" => "RIDER ADD"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.rideradd_pdf', $title);
        return $pdf->stream('RIDER ADD.pdf');
    }
    public function cetakpdf10()
    {
        $title = ["title" => "SUPPLEMANTARY OP"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.supplementaryop_pdf', $title);
        return $pdf->stream('SUPPLEMANTARY OP.pdf');
    }
    public function cetakpdf11()
    {
        $title = ["title" => "SUPPLEMENTARY DEP"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.supplementarydep_pdf', $title);
        return $pdf->stream('SUPPLEMENTARY DEP.pdf');
    }
    public function cetakpdf12()
    {
        $title = ["title" => "SUPPLEMENTARY DT"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.supplementarydt_pdf', $title);
        return $pdf->stream('SUPPLEMENTARY DT.pdf');
    }
    public function cetakpdf13()
    {
        $title = ["title" => "SUPPLEMENTARY JAMINAN"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.supplementaryjaminan_pdf', $title);
        return $pdf->stream('SUPPLEMENTARY JAMINAN.pdf');
    }
    public function cetakpdf14()
    {
        $title = ["title" => "SUPPLEMENTARY MT"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.supplementarymt_pdf', $title);
        return $pdf->stream('SUPPLEMENTARY MT.pdf');
    }
    public function cetakpdf15()
    {
        $title = ["title" => "SUPPLEMENTARY VS"];
        $pdf = PDF::loadview('datagroup.poliscontract.convent.supplementaryvs_pdf', $title);
        return $pdf->stream('SUPPLEMENTARY VS.pdf');
    }

    // Polis Contract yang syariah di group hospital
    public function cetakpdf16()
    {
        $title = ["title" => "POLICY SCHEDULE SYARIAH"];
        $pdf = PDF::loadview('datagroup.poliscontract.syariah.policyschedulesyariah_pdf', $title);
        return $pdf->stream('POLICY SCHEDULE SYARIAH.pdf');
    }
    public function cetakpdf17()
    {
        $title = ["title" => "RIDER  CI"];
        $pdf = PDF::loadview('datagroup.poliscontract.syariah.riderci_pdf', $title);
        return $pdf->stream('RIDER  CI.pdf');
    }
    public function cetakpdf18()
    {
        $title = ["title" => "RIDER TPD"];
        $pdf = PDF::loadview('datagroup.poliscontract.syariah.ridertpd_pdf', $title);
        return $pdf->stream('RIDER TPD.pdf');
    }
    public function cetakpdf19()
    {
        $title = ["title" => "RIDER ADD"];
        $pdf = PDF::loadview('datagroup.poliscontract.syariah.rideradd_pdf', $title);
        return $pdf->stream('RIDER ADD.pdf');
    }
    public function cetakpdf20()
    {
        $title = ["title" => "SUPPLEMANTARY OP"];
        $pdf = PDF::loadview('datagroup.poliscontract.syariah.supplementaryop_pdf', $title);
        return $pdf->stream('SUPPLEMANTARY OP.pdf');
    }
    public function cetakpdf21()
    {
        $title = ["title" => "SUPPLEMENTARY DEP"];
        $pdf = PDF::loadview('datagroup.poliscontract.syariah.supplementarydep_pdf', $title);
        return $pdf->stream('SUPPLEMENTARY DEP.pdf');
    }
    public function cetakpdf22()
    {
        $title = ["title" => "SUPPLEMENTARY DT"];
        $pdf = PDF::loadview('datagroup.poliscontract.syariah.supplementarydt_pdf', $title);
        return $pdf->stream('SUPPLEMENTARY DT.pdf');
    }
    public function cetakpdf23()
    {
        $title = ["title" => "SUPPLEMENTARY JAMINAN"];
        $pdf = PDF::loadview('datagroup.poliscontract.syariah.supplementaryjaminan_pdf', $title);
        return $pdf->stream('SUPPLEMENTARY JAMINAN.pdf');
    }
    public function cetakpdf24()
    {
        $title = ["title" => "SUPPLEMENTARY MT"];
        $pdf = PDF::loadview('datagroup.poliscontract.syariah.supplementarymt_pdf', $title);
        return $pdf->stream('SUPPLEMENTARY MT.pdf');
    }
    public function cetakpdf25()
    {
        $title = ["title" => "SUPPLEMENTARY VS"];
        $pdf = PDF::loadview('datagroup.poliscontract.syariah.supplementaryvs_pdf', $title);
        return $pdf->stream('SUPPLEMENTARY VS.pdf');
    }

    // Surat Pengantar Billing
    public function cetakpdf26()
    {
        $title = ["title" => "Surat pengantar billing dan Billing modal atau alteration"];
        $pdf = PDF::loadview('datagroup.billingmodal_pdf', $title)->setPaper('A3', 'Landscape');
        return $pdf->stream('Surat pengantar billing dan Billing modal atau alteration.pdf');
    }
    public function cetakpdf27()
    {
        $title = ["title" => "Surat pengantar billing dan Billing modal atau alteration"];
        $pdf = PDF::loadview('datagroup.billingmodal_pdf', $title)->setPaper('A3', 'Landscape');
        return $pdf->stream('Surat pengantar billing dan Billing modal atau alteration.pdf');
    }
    public function cetakpdf28()
    {
        $title = ["title" => "Surat pengantar billing dan Billing modal atau alteration"];
        $pdf = PDF::loadview('datagroup.billingmodal_pdf', $title)->setPaper('A3', 'Landscape');
        return $pdf->stream('Surat pengantar billing dan Billing modal atau alteration.pdf');
    }
}
