<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        /* Styling untuk judul GUIDELINES */
        .guidelines-title {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 1em;
        }

        /* Garis horizontal di bawah judul */
        .horizontal-line {
            border-top: 2px solid black;
            margin-bottom: 1.5em;
        }

        /* Styling untuk tabel */
        table {
            width: 100%;
            border-spacing: 0;
            margin-bottom: 1.5em;
            margin: 20px 0;
        }

        .roman-numeral {
            font-weight: bold;
            padding-right: 0.5em;
            /* Jarak setelah titik */
            white-space: nowrap;
            vertical-align: top;
            width: 2%;
            /* Lebar kolom Romawi */
        }

        /* Styling untuk teks di sebelah angka Romawi */
        .sub-text,
        .description-text {
            padding-left: 0.5em;
            text-align: justify;
        }

        /* Styling untuk daftar a), b), c), dll. */
        .sub-list {
            padding-left: 1em;
            /* Sejajar dengan deskripsi sebelumnya */
            text-align: justify;
            margin-bottom: 1em;
        }

        .sub-list ol {
            margin: 0;
            padding-left: 1em;
        }

        .sub-list ol li {
            margin-bottom: 0.5em;
            /* Jarak antar sub-poin */
        }

        /* Styling untuk daftar guidelines dengan bullet custom (-) */
        .sub-list ul {
            list-style-type: none;
            /* Menghilangkan bullet default */
            padding-left: 0;
            margin-left: 0;
        }

        .sub-list li {
            margin-bottom: 0.5em;
            /* Jarak antar item list */
            text-align: justify;
            /* Rata kiri-kanan untuk tampilan yang rapi */
            position: relative;
            /* Untuk mengatur posisi bullet custom */
            padding-left: 1.5em;
            /* Jarak indentasi teks dari bullet */
        }

        /* Custom bullet menggunakan tanda dash (-) */
        .sub-list li.custom-bullet::before {
            content: "-";
            /* Menambahkan tanda dash sebagai bullet */
            position: absolute;
            left: 0;
            font-weight: bold;
            /* Optional: Menambah ketebalan dash */
        }

        /* Mengatur tampilan untuk teks di kiri */
        .left-text {
            text-align: left;
            white-space: nowrap;
            padding-right: 10px;
        }

        /* Mengatur tampilan untuk teks di kanan */
        .right-text {
            text-align: right;
            white-space: nowrap;
            padding-left: 10px;
        }
    </style>
</head>

<body>
    <!-- Judul GUIDELINES -->
    <div class="guidelines-title">
        GUIDELINES
    </div>

    <!-- Garis horizontal di bawah judul -->
    <div class="horizontal-line"></div>

    <!-- Bagian pertama dengan angka Romawi I -->
    <table border="1">
        <tr>
            <td class="roman-numeral">I.</td>
            <td class="sub-text">Purpose :</td>
        </tr>
        <tr>
            <td></td>
            <td class="description-text">The main purposes of this Payment Request are:</td>
        </tr>
        <tr>
            <td></td>
            <td class="sub-list">
                <ol type="a">
                    <li>To provide a single form for all Department to request applicable for non-policy related payment
                    </li>
                    <li>To simplify the payment process from Requester up to Finance & Accounting</li>
                </ol>
            </td>
        </tr>
    </table>

    <!-- Bagian dengan angka Romawi II -->
    <table border="1">
        <tr>
            <td class="roman-numeral">II.</td>
            <td class="sub-text">Responsibilities :</td>
        </tr>
        <tr>
            <td></td>
            <td class="description-text">Each Department Head and/or Division Head is responsible for :</td>
        </tr>
        <tr>
            <td></td>
            <td class="sub-list">
                <ol type="a">
                    <li> Ascertaining that all information stated in Payment Request are correct before submitted to
                        Finance Dept</li>
                    <li> Ascertaining that all valid/relevant and required supporting documents have been properly
                        disclose and provided as attachment
                        to Payment Request
                    </li>
                    <li>Ascertaining that the Payment Request have been approved by authorised person according to SOP
                        General and Variable
                        Expense Payment Request</li>
                </ol>
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="description-text">In the case of overbudget and non-budgeted expense or capital expenditure
                items, Requesters are required to submit the
                management approval over xPAB (Excess of Pre Approved Budget).</td>
        </tr>
    </table>

    <!-- Bagian dengan angka Romawi III -->
    <table border="1">
        <tr>
            <td class="roman-numeral">III.</td>
            <td class="sub-text">How to fill/use Payment Request?</td>
        </tr>
        <tr>
            <td></td>
            <td class="description-text">Payment Request consists of several lines/rows, as follows:</td>
        </tr>
        <tr>
            <td></td>
            <td class="sub-list">
                <ol type="a">
                    <li>to submit all required documents...</li>
                    <li>to ensure all deliverables are completed on time...</li>
                </ol>
            </td>
        </tr>
    </table>

    {{-- Bagian dengan angka Romawi IV --}}
    <table border="1">
        <tr>
            <td class="roman-numeral">IV.</td>
            <td class="sub-text">What Should You Do?</td>
        </tr>
        <tr>
            <td></td>
            <td class="sub-list">
                <ul>
                    <li class="custom-bullet">Please complete the necessary information in all cells highlighted in
                        purple and complete the approval up to Head of Division level
                    </li>
                    <li class="custom-bullet">Please recheck the actual expenses and related budget of your department
                        to your PIC Budget to ensure the availability budget
                        to settle your payment request
                    </li>
                    <li class="custom-bullet"> Please ensure the consistency of request with the detailed supporting
                        documents as required in the latest SOP General and
                        Variable Expense Payment Request
                    </li>
                    <li class="custom-bullet">Please provide information to Finance & Accounting Department if there are
                        : 1) a new vendor; 2) new expenses that is not
                        match with the account code provided

                    </li>
                    <li class="custom-bullet"> Please read carefully the 'Terms & Condition of Disbursement Document
                        Submission' before submit documents to Finance
                    </li>
                    <li class="custom-bullet">You may monitor the Payment Request and documents receipt status through
                        Finance Daily LogBook
                    </li>
                </ul>
            </td>
        </tr>
    </table>

    {{-- Bagian dengan angka Romawi V --}}
    <table border="1">
        <tr>
            <td class="roman-numeral">V.</td>
            <td class="sub-text">Communication</td>
        </tr>
        {{-- <tr>
            <td class="left-text">For inquiries and communication, please contact</td>
            <td class="line"></td>
            <td class="right-text">Ext.</td>
        </tr> --}}
        <tr>
            <td></td>
            <td class="left-text">For inquiries and communication, please contact :</td>
            <td class="right-text">Ext.</td>
        </tr>
        <tr>
            <td></td>
            <td class="sub-list">
                <ol type="a">
                    <li>to finalize all necessary documentation...</li>
                    <li>to sign off on all project deliverables...</li>
                </ol>
            </td>
        </tr>
    </table>
</body>

</html>
