<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/datagroup/billingrenewal.css' }}">

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
                <p class="company-name">GFK RETAIL AND TECHNOLOGY INDONESIA, PT</p>
                <p class="company-address">C/O PT. AON INDONESIA <br>
                    L12, SEQUIS TOWER, SCBD LOT 11B <br>
                    JL. JEND. SUDIRMAN KAV. 71<br></p>
                <div class="attention">
                    <p><strong>Attention : </strong> MS. ERIKA SUNUGROHO</p>
                </div>
            </div>
        </div>


        {{-- sisi kanan --}}
        <div class="right-info">
            <table>
                <tr>
                    <td>Client/Suboffice</td>
                    <td>:</td>
                    <td>93003</td>
                    <td>/</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Policy No.</td>
                    <td>:</td>
                    <td>0000093003</td>
                </tr>
                <tr>
                    <td>Bill No. / Mode</td>
                    <td>:</td>
                    <td>C30306A0</td>
                    <td>/</td>
                    <td>Annual</td>
                </tr>
                <tr>
                    <td>Billing Period</td>
                    <td>:</td>
                    <td>Mar 1, 2023</td>
                    <td></td>
                    <td>to Feb 29, 2024</td>
                    <td>Renewal</td>
                </tr>
                <tr>
                    <td>Issue Date</td>
                    <td>:</td>
                    <td>Mar 27, 2019</td>
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
                    <td colspan="8" class="garis"></td>
                    <td colspan="2" class="total-text">TOTAL DUE : IDR</td>
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
                        <td class="left">DPCS002</td>
                        <td colspan="9"> 03/27/2023</td>
                        <td class="right">Page 1</td>
                    </tr>
                </tfoot>
            </table>
        </footer>
    </div>

    {{-- Halaman 4 --}}
    <div class="section page-break">
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
                    <p class="company-name">GFK RETAIL AND TECHNOLOGY INDONESIA, PT</p>
                    <p class="company-address">C/O PT. AON INDONESIA <br>
                        L12, SEQUIS TOWER, SCBD LOT 11B <br>
                        JL. JEND. SUDIRMAN KAV. 71<br></p>
                    <div class="attention">
                        <p><strong>Attention : </strong> MS. ERIKA SUNUGROHO</p>
                    </div>
                </div>
            </div>


            {{-- sisi kanan --}}
            <div class="right-info">
                <table>
                    <tr>
                        <td>Client/Suboffice</td>
                        <td>:</td>
                        <td>93003</td>
                        <td>/</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Policy No.</td>
                        <td>:</td>
                        <td>0000093003</td>
                    </tr>
                    <tr>
                        <td>Bill No. / Mode</td>
                        <td>:</td>
                        <td>C30306A0</td>
                        <td>/</td>
                        <td>Annual</td>
                    </tr>
                    <tr>
                        <td>Billing Period</td>
                        <td>:</td>
                        <td>Mar 1, 2023</td>
                        <td></td>
                        <td>to Feb 29, 2024</td>
                        <td>Renewal</td>
                    </tr>
                    <tr>
                        <td>Issue Date</td>
                        <td>:</td>
                        <td>Mar 27, 2019</td>
                    </tr>
                </table>
            </div>

            {{-- table content --}}
            <table class="double-border-top">
                <thead>
                    <tr>
                        <th>Cert. No.</th>
                        <th>Member / Dependent Name</th>
                        <th>Adj.<br>Type</th>
                        <th>Previous<br>BillNo.</th>
                        <th>Effective<br>Date</th>
                        <th>Plan</th>
                        <th>Cov.</th>
                        <th>Previous<br>Sum Assured</th>
                        <th>New<br>Sum Assured</th>
                        <th>No. of<br>Mths</th>
                        <th>Adj.<br>Premium</th>
                        <th>Adj.Premium<br>Loading</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4">YEARLY RENEWABLE TERM LIFE (YRT LIFE)</td>
                        <td colspan="8">(Currency : IDR)</td>
                    </tr>
                    <tr>
                        <td>0000000022</td>
                        <td>RENI LESTARI</td>
                        <td>ADD</td>
                        <td></td>
                        <td>Mar 15,2023</td>
                        <td>005</td>
                        <td>SPU</td>
                        <td></td>
                        <td>3000000</td>
                        <td>11</td>
                        <td>10.587.50</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="8"></td>
                        <td colspan="3">Product Adjustment : IDR</td>
                        <td colspan="1"> 10,587.50</td>
                    </tr>

                    <tr>
                        <td colspan="4">HOSPITAL AND SURGICAL (H+S)</td>
                        <td colspan="8">(Currency : IDR)</td>
                    </tr>

                    <tr>
                        <td>0000000022</td>
                        <td>RENI LESTARI</td>
                        <td>ADD</td>
                        <td></td>
                        <td>Mar 15,2023</td>
                        <td>005</td>
                        <td>SPU</td>
                        <td></td>
                        <td></td>
                        <td>11</td>
                        <td>665,705.33</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="8"></td>
                        <td colspan="3">Product Adjustment : IDR</td>
                        <td colspan="1"> 665,705.33</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="12" class="none-garis"></td>
                    </tr>

                    <tr class="total-row">
                        <td colspan="8" class="garis"></td>
                        <td colspan="3" class="total-text">TOTAL DUE : IDR</td>
                        <td class="total-due"> 3,432,250.25</td>
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
                            <td class="left"> DPCS002</td>
                            <td colspan="9"> 03/27/2023</td>
                            <td class="right">Page 1</td>
                        </tr>
                    </tfoot>
                </table>
            </footer>
        </div>
    </div>


</body>

</html>
