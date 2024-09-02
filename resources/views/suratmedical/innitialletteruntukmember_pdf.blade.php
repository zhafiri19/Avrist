<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/suratmedical/innitialletteruntukmember.css' }}">
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
            <p class="date">May 24, 2023</p>
            <p class="insured-name">Nama tertanggung</p>
            <p class="company-name">Nama Perusahaan</p>
            <p class="address">Alamat Perusahaan
            </p>
        </div>
        <div class="main-content">
            <p class="dear">Dear Nama tertanggung,</p>

            <p class="insurance-policy">GROUP LIFE INSURANCE POLICY NO. GL- No Polis <br>INVITATION FOR MEDICAL TESTS
                AND/OR FURNISHING ADDITIONAL INFORMATION </p>
            <p>This refers to your application for Group Insurance coverage as follows</p>

            <table>
                <thead>
                    <tr>
                        <th>Policy Number</th>
                        <th>Certificate Number</th>
                        <th>Name of Member / Dependant</th>
                        <th>REL</th>
                        <th>Coverage</th>
                        <th></th>
                        <th>Proposed Amt of insurance</th>
                        <th></th>
                        <th>Current Amt of Insurance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0000020258</td>
                        <td>0000000263</td>
                        <td>TJUTJU MUTIARA CHANDRA</td>
                        <td>M</td>
                        <td>YRT LIFE</td>
                        <td>IDR</td>
                        <td>7,321,143,312</td>
                        <td>IDR</td>
                        <td>3,000,000,000</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td>TPD</td>
                        <td>IDR</td>
                        <td>7,321,143,312</td>
                        <td>IDR</td>
                        <td>3,000,000,000</td>
                    </tr>
                </tbody>
            </table>

            <p>To enable us to consider the proposed coverage, you are invited to attend to the following within FOUR
                (4) WEEKS from the date of this letter</p>

            <div class="medical-text">Medical Requirements</div>

            <!-- Bullet -->
            <ul>
                <li>HbA1c</li>
            </ul>
            <p>Kindly contact one of our panel clinics (see attachment) for an appointment for the above tests. Please
                bring along this letter and attachment (if any) with your identification card/passport when attending to
                the above tests</p>
            <p>In the meantime, they are currently insured up to the shown under the column "Current Amt of Insurance".
            </p>
            <p>Should you have any enquiry, please feel free to contact the undersigned at Tel :
                57898188 E.8501.</p>

            <div class="signature">
                <p class="yours-sincerely">Yours sincerely,</p>
                <div class="spaced-paragraph"></div>
                <p class="underwriting">Underwriting</p>
                <p class="group-services">Group Service Department</p>
            </div>

            <div class="cc">
                <p>cc. MARSH INDONESIA, PT, BROKER, DKI</p>
            </div>

            <div class="encl">
                <p>Encl.</p>
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
        <p class="footer-text">IM04</p>
    </footer>

</body>

</html>
