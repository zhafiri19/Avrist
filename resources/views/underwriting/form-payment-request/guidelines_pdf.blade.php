<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styling untuk judul GUIDELINES */
        .guidelines-title {
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
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

        .purpose-text,
        .description-text {
            text-align: justify;
            padding-left: 0.5em;
        }

        .sub-list {
            padding-left: 1.5em;
            margin-left: 90px;
            position: fixed;
            /* Sejajar dengan deskripsi sebelumnya */
            text-align: justify;
            margin-bottom: 1em;
        }

        .sub-list li {
            margin-bottom: 0.5em;
            /* Jarak antar sub-poin */
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
            <td class="purpose-text">Purpose :</td>
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
    <table>
        <tr>
            <td class="roman-numeral">II.</td>
            <td class="purpose-text">Responsibilities :</td>
        </tr>
        <tr>
            <td></td>
            <td class="description-text">Each Department Head and/or Division Head is responsible for :</td>
        </tr>
        <tr>
            <td></td>
            <td class="sub-list">
                <ol type="a">
                    <li>Ascertaining that all information stated in Payment Request are correct before submitted to
                        Finance Dept</li>
                    <li>Ascertaining that all valid/relevant and required supporting documents have been properly
                        disclose and provided as attachment
                        to Payment Request
                    </li>
                    <li>Ascertaining that the Payment Request have been approved by authorised person according to SOP
                        General and Variable
                        Expense Payment Request </li>
                </ol>
            </td>
        </tr>
    </table>

    <!-- Bagian dengan angka Romawi III -->
    <table>
        <tr>
            <td class="roman-numeral">III.</td>
            <td class="purpose-text">Deliverables:</td>
        </tr>
        <tr>
            <td></td>
            <td class="description-text">The deliverables of this project include:</td>
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
    <table>
        <tr>
            <td class="roman-numeral">IV.</td>
            <td class="purpose-text">Timeline:</td>
        </tr>
        <tr>
            <td></td>
            <td class="description-text">The timeline for the project is as follows:</td>
        </tr>
        <tr>
            <td></td>
            <td class="sub-list">
                <ol type="a">
                    <li>to complete the project by the designated deadline...</li>
                    <li>to review all submissions before final approval...</li>
                </ol>
            </td>
        </tr>
    </table>

    {{-- Bagian dengan angka Romawi V --}}
    <table>
        <tr>
            <td class="roman-numeral">V.</td>
            <td class="purpose-text">Conclusion:</td>
        </tr>
        <tr>
            <td></td>
            <td class="description-text">The conclusion of the project is as follows:</td>
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
