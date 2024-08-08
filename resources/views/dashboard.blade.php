@extends('main')

@section('content')
    {{-- <h1>Selamat Datang pengunjung avrist</h1> --}}
{{-- <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Table Example</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .table-container {
                width: 100%;
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                border: 1px solid #000;
                box-sizing: border-box;
            }

            table {
                width: 100%;
                /* border-collapse: collapse; */
                margin-top: 20px;
            }

            th,
            td {
                border: 1px solid #000;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            .total-row {
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div class="table-container">
            <h1>Daftar Jumlah Penonton</h1>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Jumlah Penonton</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Film A</td>
                        <td>1200</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Film B</td>
                        <td>1500</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Film C</td>
                        <td>800</td>
                    </tr>
                    <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                </tbody>
                <tfoot>
                    <tr class="total-row">
                        <td colspan="2">Total Penonton</td>
                        <td>3500</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </body>

    </html> --}}

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transmittal Slip</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .transmittal-slip {
                width: 100%;
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                border: 1px solid #000;
                box-sizing: border-box;
            }

            .header {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
            }

            .left,
            .right {
                width: 48%;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            td {
                padding: 2px 5px;
            }

            .left td:first-child {
                text-align: right;
                width: 30%;
                padding-right: 10px;
            }

            .left td:last-child {
                text-align: left;
                width: 70%;
            }

            .right {
                display: flex;
                justify-content: flex-end;
                align-items: flex-start;
            }

            .right p {
                margin: 0;
            }
        </style>
    </head>

    <body>
        <div class="transmittal-slip">
            <div class="header">
                <div class="left">
                    <table>
                        <tr>
                            <td>To:</td>
                            <td>op</td>
                        </tr>
                        <tr>
                            <td>Attn:</td>
                            <td>lk</td>
                        </tr>
                        <tr>
                            <td>Under Cover:</td>
                            <td>jk</td>
                        </tr>
                        <tr>
                            <td>Billing No:</td>
                            <td>111</td>
                        </tr>
                    </table>
                </div>
                <div class="right">
                    <p>No: 9898</p>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
