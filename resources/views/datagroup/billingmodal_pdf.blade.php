<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/datagroup/billingmodal.css' }}">

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
                <p class="company-name">BINTANG KARYA PARIWARA, PT</p>
                <p class="company-address">JL. PERINTIS KEMERDEKAAN KOMPLEK <br>
                    PERKANTORAN PULOMAS BLOK IX NO. 11 <br>
                    KEL. PULO GADUNG KEC. PULO GADUNG KOTA<br></p>
                <div class="attention">
                    <p><strong>Attention : </strong> MS. FIRLIANTI PIMA PUTRI</p>
                </div>
            </div>

        </div>


        {{-- sisi kanan --}}
        <div class="right-info">
            <table>
                <tr>
                    <td>Client/Suboffice</td>
                    <td>:</td>
                    <td>52880</td>
                    <td>/</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Policy No.</td>
                    <td>:</td>
                    <td>0000052880</td>
                </tr>
                <tr>
                    <td>Bill No. / Mode</td>
                    <td>:</td>
                    <td>B9070100</td>
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
                    <td>Jul 23, 2019</td>
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
                    <td rowspan="4">YRT LIFE</td>
                    <td>IDR</td>
                    <td>001</td>
                    <td>MEM</td>
                    <td>0</td>
                    <td>150,000,000</td>
                    <td>0</td>
                    <td>150,000,000</td>
                    <td>2.96800</td>
                    <td>445,200.00</td>
                    <td>0.00</td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td>3</td>
                    <td>0</td>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>002</td>
                    <td>MEM</td>
                    <td>0</td>
                    <td>270,000,000</td>
                    <td>0</td>
                    <td>270,000,000</td>
                    <td>2.96800</td>
                    <td>801,360.00</td>
                    <td>0.00</td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>0</td>
                    <td>9</td>
                    <td>0</td>
                    <td>9</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
            {{-- sub total dan total --}}
            <tfoot>
                {{-- sub total --}}
                <tr>
                    <td colspan="9"style="border-top: none;"></td>
                    <td style="border-top: 1px solid black; line-height: 1; text-align: left; font-weight:bold">
                        1,246,560.00</td>
                    <td style="border-top: 1px solid black; text-align: left; font-weight:bold">0.00</td>
                </tr>
                <tr>
                    <td colspan="9" style="border-top: none;"></td>
                    <td style="text-align: center;">Sub Total :</td>
                    <td style="border-top: 1px solid black; text-align: right;">1,246,560.00</td>
                </tr>
                {{-- total --}}
                <tr>
                    <td colspan="8"></td>
                    <td colspan="2" style="text-align: center;">Total premium of all products :</td>
                    <td style="text-align: right;">21,093,933.00</td>
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
                    <p class="company-name">BINTANG KARYA PARIWARA, PT</p>
                    <p class="company-address">JL. PERINTIS KEMERDEKAAN KOMPLEK <br>
                        PERKANTORAN PULOMAS BLOK IX NO. 11 <br>
                        KEL. PULO GADUNG KEC. PULO GADUNG KOTA<br></p>
                    <div class="attention">
                        <p><strong>Attention : </strong> MS. FIRLIANTI PIMA PUTRI</p>
                    </div>
                </div>

            </div>


            {{-- sisi kanan --}}
            <div class="right-info">
                <table>
                    <tr>
                        <td>Client/Suboffice</td>
                        <td>:</td>
                        <td>52880</td>
                        <td>/</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Policy No.</td>
                        <td>:</td>
                        <td>0000052880</td>
                    </tr>
                    <tr>
                        <td>Bill No. / Mode</td>
                        <td>:</td>
                        <td>B9070100</td>
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
                        <td>Jul 23, 2019</td>
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
                {{-- <tbody>
                    <tr>
                        <td>YRT LIFE</td>
                        <td>IDR</td>
                        <td>001</td>
                        <td>MEM</td>
                        <td>0</td>
                        <td>150,000,000</td>
                        <td>0</td>
                        <td>150,000,000</td>
                        <td>2.96800</td>
                        <td>445,200.00</td>
                        <td>0.00</td>
                    </tr>

                </tbody> --}}
                {{-- total --}}
                <tfoot>
                    <tr>
                        <td colspan="11"></td>
                    </tr>

                    <tr class="total-row">
                        <td colspan="8" class="garis"></td>
                        <td colspan="2" class="total-text">TOTAL DUE : IDR</td>
                        <td class="total-due">21,093,933.00</td>
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
                            <td class="right">Page 2</td>
                        </tr>
                    </tfoot>
                </table>
            </footer>
        </div>
    </div>

    {{-- Halaman 5 --}}
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
                    <p class="company-name">BINTANG KARYA PARIWARA, PT</p>
                    <p class="company-address">JL. PERINTIS KEMERDEKAAN KOMPLEK <br>
                        PERKANTORAN PULOMAS BLOK IX NO. 11 <br>
                        KEL. PULO GADUNG KEC. PULO GADUNG KOTA<br></p>
                    <div class="attention">
                        <p><strong>Attention : </strong> MS. FIRLIANTI PIMA PUTRI</p>
                    </div>
                </div>

            </div>


            {{-- sisi kanan --}}
            <div class="right-info">
                <table>
                    <tr>
                        <td>Client/Suboffice</td>
                        <td>:</td>
                        <td>52880</td>
                        <td>/</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Policy No.</td>
                        <td>:</td>
                        <td>0000052880</td>
                    </tr>
                    <tr>
                        <td>Bill No. / Mode</td>
                        <td>:</td>
                        <td>B9070100</td>
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
                        <td>Jul 23, 2019</td>
                    </tr>
                </table>
            </div>

            {{-- table content --}}
            <table class="double-border-top">
                <thead>
                    <tr>
                        <th>Cert. No.</th>
                        <th>Member / Dependent Name</th>
                        <th>Product</th>
                        <th>Curr</th>
                        <th>Plan</th>
                        <th>Cov.</th>
                        <th>Modal<br>Premium</th>
                        <th>Premium<br>Loading</th>
                        <th>Premium<br>Adjustment</th>
                        <th>Member<br>Co-Pay</th>
                        <th>Total <br>Premium</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0000000001</td>
                        <td>R.H MEDY SUBIYAKTO .SE.MM</td>
                        <td>YRT LIFE</td>
                        <td>IDR</td>
                        <td>001</td>
                        <td>MEM</td>
                        <td>148,400.0000</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>148,400.00</td>
                    </tr>

                </tbody>
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
    </div>

    {{-- Halaman 6 --}}
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
                    <p class="company-name">BINTANG KARYA PARIWARA, PT</p>
                    <p class="company-address">JL. PERINTIS KEMERDEKAAN KOMPLEK <br>
                        PERKANTORAN PULOMAS BLOK IX NO. 11 <br>
                        KEL. PULO GADUNG KEC. PULO GADUNG KOTA<br></p>
                    <div class="attention">
                        <p><strong>Attention : </strong> MS. FIRLIANTI PIMA PUTRI</p>
                    </div>
                </div>

            </div>


            {{-- sisi kanan --}}
            <div class="right-info">
                <table>
                    <tr>
                        <td>Client/Suboffice</td>
                        <td>:</td>
                        <td>52880</td>
                        <td>/</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Policy No.</td>
                        <td>:</td>
                        <td>0000052880</td>
                    </tr>
                    <tr>
                        <td>Bill No. / Mode</td>
                        <td>:</td>
                        <td>B9070100</td>
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
                        <td>Jul 23, 2019</td>
                    </tr>
                </table>
            </div>

            {{-- table content --}}
            <table class="double-border-top">
                <thead>
                    <tr>
                        <th>Cert. No.</th>
                        <th>Member / Dependent Name</th>
                        <th>Product</th>
                        <th>Curr</th>
                        <th>Plan</th>
                        <th>Cov.</th>
                        <th>Modal<br>Premium</th>
                        <th>Premium<br>Loading</th>
                        <th>Premium<br>Adjustment</th>
                        <th>Member<br>Co-Pay</th>
                        <th>Total <br>Premium</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0000000001</td>
                        <td>R.H MEDY SUBIYAKTO .SE.MM</td>
                        <td>YRT LIFE</td>
                        <td>IDR</td>
                        <td>001</td>
                        <td>MEM</td>
                        <td>148,400.0000</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>148,400.00</td>
                    </tr>

                </tbody>
                {{-- sub total dan total --}}
                <tfoot>
                    <tr>
                        <td colspan="11"></td>
                    </tr>

                    <tr class="total-row">
                        <td colspan="7" class="garis"></td>
                        <td colspan="2" class="total-text">TOTAL DUE : IDR</td>
                        <td colspan="2" class="total-due">21,093,933.00</td>
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
                            <td class="right">Page 2</td>
                        </tr>
                    </tfoot>
                </table>
            </footer>
        </div>
    </div>

    {{-- Halaman 7 --}}
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
                    <p class="company-name">BINTANG KARYA PARIWARA, PT</p>
                    <p class="company-address">JL. PERINTIS KEMERDEKAAN KOMPLEK <br>
                        PERKANTORAN PULOMAS BLOK IX NO. 11 <br>
                        KEL. PULO GADUNG KEC. PULO GADUNG KOTA<br></p>
                    <div class="attention">
                        <p><strong>Attention : </strong> MS. FIRLIANTI PIMA PUTRI</p>
                    </div>
                </div>

            </div>


            {{-- sisi kanan --}}
            <div class="right-info">
                <table>
                    <tr>
                        <td>Client/Suboffice</td>
                        <td>:</td>
                        <td>52880</td>
                        <td>/</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Policy No.</td>
                        <td>:</td>
                        <td>0000052880</td>
                    </tr>
                    <tr>
                        <td>Bill No. / Mode</td>
                        <td>:</td>
                        <td>B9070100</td>
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
                        <td>Jul 23, 2019</td>
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
                        <td>0000000001</td>
                        <td>R.H MEDY SUBIYAKTO .SE.MM</td>
                        <td>ADD</td>
                        <td></td>
                        <td>Jul 11,2019</td>
                        <td>001</td>
                        <td>MEM</td>
                        <td></td>
                        <td>50000000</td>
                        <td>0</td>
                        <td>0.00</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="8"></td>
                        <td colspan="3">Product Adjustment : IDR</td>
                        <td colspan="1">0.00</td>
                    </tr>

                    <tr>
                        <td colspan="4">ACCIDENTAL DEATH AND DISABLEMENT (CON) (AD+D(CON))</td>
                        <td colspan="8">(Currency : IDR)</td>
                    </tr>

                    <tr>
                        <td>0000000001</td>
                        <td>R.H MEDY SUBIYAKTO .SE.MM</td>
                        <td>ADD</td>
                        <td></td>
                        <td>Jul 11,2019</td>
                        <td>001</td>
                        <td>MEM</td>
                        <td></td>
                        <td>50000000</td>
                        <td>0</td>
                        <td>0.00</td>
                        <td></td>
                    </tr>
                </tbody>
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
    </div>

    {{-- Halaman 8 --}}
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
                    <p class="company-name">BINTANG KARYA PARIWARA, PT</p>
                    <p class="company-address">JL. PERINTIS KEMERDEKAAN KOMPLEK <br>
                        PERKANTORAN PULOMAS BLOK IX NO. 11 <br>
                        KEL. PULO GADUNG KEC. PULO GADUNG KOTA<br></p>
                    <div class="attention">
                        <p><strong>Attention : </strong> MS. FIRLIANTI PIMA PUTRI</p>
                    </div>
                </div>

            </div>


            {{-- sisi kanan --}}
            <div class="right-info">
                <table>
                    <tr>
                        <td>Client/Suboffice</td>
                        <td>:</td>
                        <td>52880</td>
                        <td>/</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Policy No.</td>
                        <td>:</td>
                        <td>0000052880</td>
                    </tr>
                    <tr>
                        <td>Bill No. / Mode</td>
                        <td>:</td>
                        <td>B9070100</td>
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
                        <td>Jul 23, 2019</td>
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
                        <td>0000000006</td>
                        <td>YULIANA</td>
                        <td>ADD</td>
                        <td></td>
                        <td>Jul 11,2019</td>
                        <td>002</td>
                        <td>MEM</td>
                        <td></td>
                        <td>30000000</td>
                        <td>0</td>
                        <td>0.00</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="8"></td>
                        <td colspan="3">Product Adjustment : IDR</td>
                        <td colspan="1">0.00</td>
                    </tr>

                    <tr>
                        <td colspan="4">HOSPITAL AND SURGICAL (H+S)</td>
                        <td colspan="8">(Currency : IDR)</td>
                    </tr>

                    <tr>
                        <td>0000000001</td>
                        <td>R.H MEDY SUBIYAKTO .SE.MM QOTRUN NADA SAVIRA TRISTAN ZULFIKAR</td>
                        <td>ADD</td>
                        <td></td>
                        <td>Jul 11,2019</td>
                        <td>005</td>
                        <td>M+C</td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                        <td>0.00</td>
                        <td></td>
                    </tr>

                </tbody>
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
                            <td class="right">Page 2</td>
                        </tr>
                    </tfoot>
                </table>
            </footer>
        </div>
    </div>

    {{-- Halaman 9 --}}
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
                    <p class="company-name">BINTANG KARYA PARIWARA, PT</p>
                    <p class="company-address">JL. PERINTIS KEMERDEKAAN KOMPLEK <br>
                        PERKANTORAN PULOMAS BLOK IX NO. 11 <br>
                        KEL. PULO GADUNG KEC. PULO GADUNG KOTA<br></p>
                    <div class="attention">
                        <p><strong>Attention : </strong> MS. FIRLIANTI PIMA PUTRI</p>
                    </div>
                </div>

            </div>


            {{-- sisi kanan --}}
            <div class="right-info">
                <table>
                    <tr>
                        <td>Client/Suboffice</td>
                        <td>:</td>
                        <td>52880</td>
                        <td>/</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Policy No.</td>
                        <td>:</td>
                        <td>0000052880</td>
                    </tr>
                    <tr>
                        <td>Bill No. / Mode</td>
                        <td>:</td>
                        <td>B9070100</td>
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
                        <td>Jul 23, 2019</td>
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
                        <td>0000000010</td>
                        <td>SUSWOYO</td>
                        <td>ADD</td>
                        <td></td>
                        <td>Jul 11,2019</td>
                        <td>010</td>
                        <td>MEM</td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                        <td>0.00</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="8"></td>
                        <td colspan="3">Product Adjustment : IDR</td>
                        <td colspan="1">0.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="11" class="garis"></td>
                    </tr>

                    <tr class="total-row">
                        <td colspan="7" class="garis"></td>
                        <td colspan="3" class="total-text">TOTAL DUE : IDR</td>
                        <td colspan="2" class="total-due">0.00</td>
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
                            <td class="right">Page 3</td>
                        </tr>
                    </tfoot>
                </table>
            </footer>
        </div>
    </div>

</body>

</html>
