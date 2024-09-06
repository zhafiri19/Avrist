<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/datagroup/asobilling/asofeealteration.css' }}">

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
                <p class="company-name">AMERTA INDAH OTSUKA, PT</p>
                <p class="company-address">WISMA PONDOK INDAH LT. 7 UNIT 701 <br>
                    JL. SULTAN ISKANDAR MUDA KAV V-TA <br>
                    JAKARTA SELATAN, 12310
                <div class="attention">
                    <p><strong>Attention : </strong> MRS. UMI SYARIFAH NURFANI</p>
                </div>
            </div>
        </div>


        {{-- sisi kanan --}}
        <div class="right-info">
            <table>
                <tr>
                    <td>Client/Suboffice</td>
                    <td>:</td>
                    <td>93865/100</td>
                </tr>
                <tr>
                    <td>Policy No.</td>
                    <td>:</td>
                    <td>0000093865</td>
                </tr>
                <tr>
                    <td>Bill No. / Mode</td>
                    <td>:</td>
                    <td>J.39682</td>
                </tr>
                <tr>
                    <td>Billing Period</td>
                    <td>:</td>
                    <td>Jan 01, 24 s/d Des 31, 24</td>
                </tr>
                <tr>
                    <td>Issue Date</td>
                    <td>:</td>
                    <td>Juni 14, 24</td>
                </tr>
            </table>
        </div>

        {{-- table content --}}
        <table class="double-border-top">
            <thead>
                <tr>
                    <th class="details">Details</th>
                    <th class="amount">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="details">ASO FEE periode Jan 01, 24 s/d Des 31, 24 <br>( 28 x Rp. 65,000,-) </td>
                    <td class="amount"> 1,820,000</td>
                </tr>
            </tbody>

            <tfoot>

                <!-- Spacer row to create a gap -->
                <tr class="spacer">
                    <td colspan="2"></td>
                </tr>
                <!-- Total row -->
                <tr class="total-row">
                    <td class="total-text">Total Due : IDR</td>
                    <td class="total-due">1,820,000</td>
                </tr>
            </tfoot>
        </table>

        <footer>
            <table>
                <tfoot>
                    <tr>
                        <td class="footer-text">
                            GROUP INSURANCE DEPARTMENT : Gedung WTC II, 7th Floor Jl. Jenderal Sudirman Kav 29 - 31
                            SETIABUDI JAKARTA
                        </td>
                    </tr>
                    <tr class="footer-details">
                        <td class="right">Page 1</td>
                    </tr>
                </tfoot>
            </table>
        </footer>
    </div>

    <div class="page-break"></div>
    {{-- halaman 3 --}}

    <div class="title">MEMBER LISTING AMERTA INDAH OTSUKA, PT</div>
    <table border="1">
        <thead>
            <th>No</th>
            <th>PolNo</th>
            <th>CertNo</th>
            <th>BenPlnCd</th>
            <th>CovgCode</th>
            <th>DepCode</th>
            <th>DepType</th>
            <th>Name</th>
            <th>DoP</th>
            <th>DoE</th>
            <th>DoB</th>
            <th>Sex</th>
            <th>Marital</th>
            <th>No Billing Addition</th>
        </thead>
        <tbody>
            <tr>

                <td>1</td>
                <td>93865</td>
                <td>0000000273-8 </td>
                <td>017</td>
                <td>CHD</td>
                <td></td>
                <td>C</td>
                <td>SINTA MEILIANY</td>
                <td>1-MAY-24</td>
                <td></td>
                <td>20-May-08</td>
                <td>F</td>
                <td></td>
                <td>C40101AA</td>
            </tr>
        </tbody>
    </table>


</body>

</html>
