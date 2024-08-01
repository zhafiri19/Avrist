@extends('main')

@section('content')
    <a href="/transmitallist/cetakpdf2" class="btn btn-info" target="_blank">Cetak PDF</a>
    <style>
        .kotak {
            width: 55%;
            height: 15%;
            border: 3px solid;
            position: relative;
            padding: 25px 50px 25px 50px;
            margin-top: 50px;
            font-size: 10px;
        }

        .teks {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>

    <div class="container">
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

    </div>
@endsection
