@extends('main')

@section('content')
    <a href="/transmitaladdress/cetakpdf" class="btn btn-info" target="_blank">Cetak PDF</a>
    <style>
        .teks {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            border: 3px solid;
            padding: 50px;
        }
    </style>

    <table>
        <tr>
            <td>
                <div class="teks">
                    <p>TROY PURI SAKTI, PT</p>
                    <br>
                    <p>GEDUNG ATRIA @SUDIRMAN 16TH FLOOR</p>
                    <p>JL. JEND SUDIRMAN KAV 33 A KARET TENGSIN</p>
                    <p>KEC TANAH ABANG JAKARTA PUSAT 10220</p>
                    <p>DKI JAKARTA</p>
                    <p>Attn.: MS. ANGELINA PINKAN. R</p>
                </div>
            </td>
        </tr>
    </table>
@endsection
