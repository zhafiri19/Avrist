@extends('main')

@section('content')
    <a href="/endorsement/cetakpdf" class="btn btn-info" target="_blank">Cetak PDF</a>
    <title>{{ $title }}</title>
    <style>
        .judul {
            text-align: center;
        }

        .page {
            width: 210mm;
            min-height: 297mm;
            padding: 15mm;
            margin: 10mm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .subpage {
            padding: 1cm;
            border: 5px red solid;
            height: 257mm;
            outline: 2cm #FFEAEA solid;
        }

        td {
            padding-top: 5px;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
    </style>

    <div class="judul">
        <h1>PT Avrist Assurance</h1>
        <h3>Endorsement</h3>
        <h5>No. 002/I/GHS GL/22 J </h5>
    </div>
    <p style="margin-top: 50px; margin-bottom: 30px;">Dilampirkan dan merupakan satu kesatuan serta tak terpisahkan dari
        Polis Asuransi Kelompok: 0000093579 dan Kontrak Tambahannya</p>
    <table>
        <tr>
            <td style="width: 220px;">Pemegang Polis</td>
            <td>:</td>
            <td>PT. XXX INDONESIA</td>
        </tr>
        <tr>
            <td style="width: 220px;">Jangka Waktu Polis</td>
            <td>:</td>
            <td>01 Januari 2022 s/d 31 Desember 2022</td>
        </tr>
        <tr>
            <td style="width: 220px;">Tanggal Efektif Endosement</td>
            <td>:</td>
            <td>01 Januari 2022</td>
        </tr>
    </table>
    <p style="margin-top: 30px;line-height:1.5;">Dengan ditandatanganinya Endosemen ini, kondisi dan ketentuan yang tercantum
        di dalam Polis diubah dan dimodifikasi sebagaimana tersebut di bawah ini :
    </p>
    <p style="margin-top: 30px;line-height:1.5;">(Masukan semua TC yang sudah dimasukan ke dalam system)</p>
    <p style="margin-top: 30px;line-height:1.5;">Seluruh kondisi dan ketentuan yang tercantum di dalam Polis sepanjang tidak
        diubah atau dimodifikasi melalui
        Endosemen No. 002/I/GHS GL/22 J ini, akan tetap berlaku.</p>

    <div style="margin-top:50px;width: 250px;text-align: left;">
        <h4>PT Avrist Assurance</h4>
        <p style="margin-top: 80px;">
            <hr>
        </p>
        <h5>
            <center>Registrar</center>
        </h5>
        <div>Issue date : xxxxxx
        </div>
        <div>
            ~user
        </div>
    </div>
@endsection
