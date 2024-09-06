<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ 'css/datagroup/asobilling/asofeeawal.css' }}">
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="header-content">
            <div class="logo">
                <img src="{{ 'avrist.png' }}" alt="Company Logo" class="logo-img">
            </div>
            <div class="invoice-text">
                <h2>INVOICE</h2>
                <p>No: D/N J.39624-rev</p>
            </div>
        </div>
    </header>

    <!-- Issue Date and Attention Section -->
    <section class="details">
        <div class="issue-date">
            <p>Issue Date : January 26, 2024</p>
        </div>
        <div class="attention">
            <p>Attention : MRS.MK RANGGANATA</p>
        </div>
    </section>

    <!-- Table Section -->
    <section>
        <table>
            <thead>
                <tr>
                    <th>Policy Holder Name</th>
                    <th>Address</th>
                    <th>Total Billing ASO Fee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ASET DIGITAL BERKAT, PT</td>
                    <td>C/O PT BARRON PANDU ABADI CITILOFTS SUDIRMAN, 22 FLOOR UNIT 07 JL. K.H. MAS MANSYUR NO. 121
                        TANAH ABANG</td>
                    <td>Rp.6.200.000,00</td>
                </tr>
            </tbody>
        </table>

        <!-- Notes Section -->
        <div class="notes-section">
            <p class="notes-title">Notes:</p>

            <!-- Unordered List -->
            <ul class="bullet-list">
                <li>Total billed ASO fee will be subject to the official billing</li>
                <li>The above amount is considered as the initial payment to start the program</li>
                <li>All transfer cost will be covered by PT. Avrist Assurance</li>
            </ul>
        </div>

        <!-- Container for the box with text -->
        <div class="text-box">
            <p class="text-line line1">Please pay the EXACT AMOUNT DUE and transfer the payment to PT. Avrist Assurance
            </p>
            <p class="text-line line2">MUFG Bank, Ltd</p>
            <p class="text-line line3">A/C No. 1018000093795100</p>
        </div>

        <!-- Signature Section -->
        <div class="signature-section">
            <p class="yours-sincerely">Yours Sincerely</p>
            <p class="name">Lindawati Soebiantoro</p>
            <div class="signature-line"></div>
            <p class="coo">Chief Operating Office</p>
            <p class="company">PT. Avrist Assurance</p>
        </div>
    </section>

    <footer>
        <div class="footer-left">
            <p class="company-name">PT Avrist Assurance</p>
            <p class="address">Office | World Trade Center II, Lt 7-8, JL. Jend. Sudirman Kav. 29-31, Jakarta 12920 t
                +622157898188 | www.avrist.com | e-mail customer-service@avrist.com
            </p>
        </div>
        <div class="footer-right">
            <img src="{{ 'avrist.png' }}" alt="Logo Perusahaan" class="logo">
        </div>
    </footer>

    {{-- page break --}}
    <div class="page-break"></div>

    <!-- Header Section -->
    <header>
        <div class="header-content">
            <div class="logo">
                <img src="{{ 'avrist.png' }}" alt="Company Logo" class="logo-img">
            </div>
        </div>
    </header>

    <!-- Issue Date and Attention Section -->
    <section class="details">
        <div class="invoice-details">Invoice Details:</div>
        <div class="periode">
            <p>Periode : 10 Oct 2023 s.d 09 Oct 2024</p>
        </div>
        <div class="benefit">
            <p>Benefit : Medical Examination</p>
        </div>
    </section>

    <!-- Table Section -->
    <section>
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ASO Fee :
                        <!-- Unordered List -->
                        <ul class="bullet-list">
                            <li>All Member 62 x Rp 100.000.-</li>
                        </ul>
                    </td>
                    <td>Rp. 6,200,000,00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>Rp. 6,200,000,00</td>
                </tr>
            </tbody>
        </table>

        <footer>
            <div class="footer-left">
                <p class="company-name">PT Avrist Assurance</p>
                <p class="address">Office | World Trade Center II, Lt 7-8, JL. Jend. Sudirman Kav. 29-31, Jakarta 12920
                    t
                    +622157898188 | www.avrist.com | e-mail customer-service@avrist.com
                </p>
            </div>
            <div class="footer-right">
                <img src="{{ 'avrist.png' }}" alt="Logo Perusahaan" class="logo">
            </div>
        </footer>
</body>

</html>
