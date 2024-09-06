<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/suratmedical/followuplettermember.css' }}">
</head>

<body>

    <header>
        <div class="header-left">
            <p class="company-name">PT Avrist Assurance</p>
            <p class="building-name">Gedung WTC II, 7th Floor</p>
            <p class="address">Jl. Jenderal Sudirman Kav 29-31
                <br> Jakarta 12920
            </p>
            <p class="phone">t +62 21 5789 8188</p>
            <p class="website">www.avrist.com</p>
        </div>
        <div class="header-right">
            <img src="{{ 'avrist.png' }}" alt="Logo Perusahaan" class="logo">
        </div>
    </header>

    <main>
        <div class="letter-content">
            <p class="date">May 30, 2023</p>
            <p class="company-name">Nama tertanggung</p>
            <p class="address">Alamat Perusahaan
            </p>
        </div>

        <div class="main-content">
            <p class="dear">Dear Nama tertanggung,</p>
            <p class="insurance-policy">GROUP LIFE INSURANCE POLICY NO. GL- No Polis
                <br>TO ATTEND ADDITIONAL MEDICAL TESTS AND/OR FURNISH ADDITIONAL INFORMATION
            </p>
            <p>Having reviewed the underwriting documents received (be it completed health
                declaration form/medical reports and results from our panel doctors/ medical reports from your own
                doctor/additional information furnished), we would like to invite you to attend to the following within
                Four (4) Weeks from the date of this letter before full coverage can be considered.</p>
            <p>You are kindly requested to furnish the following information for our review. Please send the information
                to the undersigned directly</p>

            <ul>
                <li>Tipe Medical / Free text kekurangan pending</li>
            </ul>

            <p>Our acceptance of your full coverage will be subject to the results of the above requirements. In the
                meantime, you are covered at :</p>

            <table>
                <thead>
                    <tr>
                        <th>Policy Number</th>
                        <th>Certificate Number</th>
                        <th>Name of Member / Dependant</th>
                        <th>REL</th>
                        <th>Coverage</th>
                        <th></th>
                        <th>Current Amt of Insurance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0000002131</td>
                        <td>0000120103</td>
                        <td>MULYONO</td>
                        <td>M</td>
                        <td>YRT LIFE</td>
                        <td>IDR</td>
                        <td>250,000,000</td>
                    </tr>
                </tbody>
            </table>

            <p>Should you have any enquiry, please feel free to contact the undersigned at Tel :
                57898188 E.8501.</p>

            <div class="signature">
                <p class="yours-sincerely">Yours sincerely,</p>
                <div class="spaced-paragraph"></div>
                <p class="underwriting">Underwriting</p>
                <p class="group-services">Group Service Department</p>
            </div>

            <div class="encl">
                <p>Encl</p>
            </div>

            <div class="notes">Notes:</div>

            <ol class="custom-format">
                <li>The above medical exam/tests are required for the sole purpose of underwriting your group insurance
                    application. Medical information and result furnished by the medical providers are to be kept
                    confidential and will not be released</li>
                <li>For female applicant, please do not attend to the medical exam / urine test during menstruating /
                    pregnant preiod</li>
            </ol>
            <div class="note">Note: REL: Relationship; M:Member</div>
        </div>
    </main>

    <footer>
        <p class="footer-text">FM03</p>
    </footer>

</body>

</html>
