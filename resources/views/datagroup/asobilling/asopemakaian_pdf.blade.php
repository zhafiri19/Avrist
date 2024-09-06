<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/datagroup/asobilling/asopemakaian.css' }}">

</head>

<body>
    {{-- Halaman 2 --}}
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
                <p class="company-name">BUNDAMEDIK TBK, PT - VIP</p>
                <p class="company-address">C/O PT. MARSH INDONESIA <br>
                    WORLD TRADE CENTER 3, 16TH FLOOR <br>
                    JL JEND SUDIRMAN KAV 29-31, JAKARTA
                <div class="attention">
                    <p><strong>Attention : </strong> MS. YOVITA</p>
                </div>
            </div>
        </div>


        {{-- sisi kanan --}}
        <div class="right-info">
            <table>
                <tr>
                    <td>Client/Suboffice</td>
                    <td>:</td>
                    <td>93649 / 100</td>

                </tr>
                <tr>
                    <td>Policy No.</td>
                    <td>:</td>
                    <td>0000093649</td>
                </tr>
                <tr>
                    <td>Bill No. / Mode</td>
                    <td>:</td>
                    <td>A000000107</td>
                    <td>/</td>
                    <td>Annual</td>
                </tr>
                <tr>
                    <td>Billing Period</td>
                    <td>:</td>
                    <td>Sep 1, 2022</td>
                    <td></td>
                    <td>to Aug 31, 2023</td>
                    <td>First Year</td>
                </tr>
                <tr>
                    <td>Issue Date</td>
                    <td>:</td>
                    <td>Oct 12, 2023</td>
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
                    <td class="details">Billing Pemakaian Claim Period 11 Jul 2023 To 12 Oct 2023</td>
                    <td class="amount"> 26,872,740.00</td>
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
                    <td class="total-due">26,872,740.00</td>
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
                        <td> 10/16/2023</td>
                        <td class="right">Page 1</td>
                    </tr>
                </tfoot>
            </table>
        </footer>
    </div>


</body>

</html>
