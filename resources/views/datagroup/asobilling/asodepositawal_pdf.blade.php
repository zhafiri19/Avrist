<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/datagroup/asobilling/asodepositawal.css' }}">

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
                <p class="company-name">ASET DIGITAL BERKAT, PT</p>
                <p class="company-address">C/O PT BARRON PANDU ABADI <br>
                    CITILOFTS SUDIRMAN, 22 FLOOR UNIT 07 <br>
                    JL. K.H. MAS MANSYUR NO. 121 TANAH ABANG
                <div class="attention">
                    <p><strong>Attention : </strong> MRS. MK RANGGANATA</p>
                </div>
            </div>
        </div>


        {{-- sisi kanan --}}
        <div class="right-info">
            <table>
                <tr>
                    <td>Client/Suboffice</td>
                    <td>:</td>
                    <td>93795</td>
                    <td>/</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Policy No.</td>
                    <td>:</td>
                    <td>0000093795</td>
                </tr>
                <tr>
                    <td>Bill No. / Mode</td>
                    <td>:</td>
                    <td>A000000111</td>
                    <td>/</td>
                    <td>Annual</td>
                </tr>
                <tr>
                    <td>Billing Period</td>
                    <td>:</td>
                    <td>Oct 10, 2023</td>
                    <td></td>
                    <td>to Oct 9, 2024</td>
                    <td>First Year</td>
                </tr>
                <tr>
                    <td>Issue Date</td>
                    <td>:</td>
                    <td>Jan 26, 2024</td>
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
                    <td class="details">Billing Modal First Year Period 10 Oct 2023 To 09 Oct 2024</td>
                    <td class="amount"> 50,000,000.00</td>
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
                    <td class="total-due">50,000,000.00</td>
                </tr>
            </tfoot>
        </table>

        <footer>
            <table>
                <tfoot>
                    <tr>
                        <td colspan="3" class="footer-text">
                            GROUP INSURANCE DEPARTMENT : Gedung WTC II, 7th Floor Jl. Jenderal Sudirman Kav 29 - 31
                            SETIABUDI JAKARTA
                        </td>
                    </tr>
                    <tr class="footer-details">
                        <td class="left">DGMD835</td>
                        <td> 07/02/2024</td>
                        <td class="right">Page 1</td>
                    </tr>
                </tfoot>
            </table>
        </footer>
    </div>


</body>

</html>
