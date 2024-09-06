<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/datagroup/estimatebilling.css' }}">
</head>

<body>
    {{-- Halaman 3 --}}
    <table class="w-full">
        <tr>
            <td>
                <img src="{{ 'Avrist.png' }}" alt="Avrist">
            </td>

            <td>
                <div class="header-text">
                    <div class="group-insurance">GROUP INSURANCE</div>
                    <div class="premium-statement">Premium Statement</div>
                </div>
            </td>
        </tr>
    </table>

    <div class="container">
        {{-- sisi kiri --}}
        <div class="info">
            <div class="left-info">
                <p class="company-name">BUT DAI ASEAN USAID PROSPECT</p>
                <p class="company-address">JL. ISKANDARSYAH I NO. 10 3RD FLOOR <br>
                    RT. 05 / RW. 02, MELAWAI, KEBAYORAN BARU <br>
                    JAKARTA SELATAN 12160 <br>
                    DKI JAKARTA
                <div class="attention">
                    <p><strong>Attention : </strong> MS. IRA FERYANI</p>
                </div>
            </div>
        </div>

        {{-- sisi kanan --}}
        <div class="right-info">
            <table>
                <tr>
                    <td>Client/Suboffice</td>
                    <td>:</td>
                    <td>93076</td>
                    <td>/</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Policy No.</td>
                    <td>:</td>
                    <td>00000093076</td>
                </tr>
                <tr>
                    <td>Bill No. / Mode</td>
                    <td>:</td>
                    <td>00010000</td>
                    <td>/</td>
                    <td>Annual</td>
                </tr>
                <tr>
                    <td>Billing Period</td>
                    <td>:</td>
                    <td>Jul 11, 2019</td>
                    <td></td>
                    <td>to Jul 10, 2020</td>
                    <td>First Year</td>
                </tr>
                <tr>
                    <td>Issue Date</td>
                    <td>:</td>
                    <td>Jul 4, 2019</td>
                </tr>
            </table>
        </div>

        {{-- table content --}}
        <table class="double-border-top">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Curr</th>
                    <th>Plan</th>
                    <th>Cov</th>
                    <th>Prev.Cov.<br>(No.of Lives)</th>
                    <th>Addtl.Cov.<br>(No.of Lives)</th>
                    <th>Term.Cov.<br>(No.of Lives)</th>
                    <th>Total Cov.<br>(No.of Lives)</th>
                    <th>Modal Rate</th>
                    <th>Premium Due</th>
                    <th>Premium <br>Adjustment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="2">YRT LIFE</td>
                    <td>IDR</td>
                    <td>005</td>
                    <td>SPU</td>
                    <td>0</td>
                    <td>3,000,000</td>
                    <td>0</td>
                    <td>0</td>
                    <td>3.85000</td>
                    <td>0.00</td>
                    <td> 10,587.50</td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td>1</td>
                    <td>0</td>
                    <td>0</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>

            <tfoot>
                {{-- sub total --}}
                <tr>
                    <td colspan="9"style="border-top: none;"></td>
                    <td style="border-top: 1px solid black; line-height: 1; text-align: left; font-weight:bold">
                        0.00</td>
                    <td style="border-top: 1px solid black; text-align: left; font-weight:bold"> 10,587.50</td>
                </tr>
                <tr>
                    <td colspan="9" style="border-top: none;"></td>
                    <td style="text-align: center;">Sub Total :</td>
                    <td style="border-top: 1px solid black; text-align: right;"> 10,587.50</td>
                </tr>
                {{-- total --}}
                <tr>
                    <td colspan="8"></td>
                    <td colspan="2" style="text-align: center;">Total premium of all products :</td>
                    <td style="text-align: right;">3,432,250.25</td>
                </tr>

                <tr>
                    <td colspan="11" class="none-garis"></td>
                </tr>
                {{-- Total Due --}}
                <tr class="total-row">
                    <td colspan="10" class="total-text">TOTAL DUE : IDR</td>
                    <td class="total-due">3,432,250.25</td>
                </tr>
            </tfoot>
        </table>

        <footer>
            <table>
                <tfoot>
                    <tr>
                        <td colspan="11" class="footer-text">
                            Gedung WTC II, 7th Floor Jl. Jenderal Sudirman Kav 29 - 31 SETIABUDI JAKARTA
                        </td>
                    </tr>
                    <tr class="footer-details">
                        <td class="left">DGMD504</td>
                        <td colspan="9">R 08/21/2019</td>
                        <td class="right">Page 1</td>
                    </tr>
                </tfoot>
            </table>
        </footer>
    </div>
</body>

</html>
