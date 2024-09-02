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
            <p class="date">June 6, 2023</p>
            <p class="company-name">Nama tertanggung</p>
            <p class="address">Alamat Perusahaan
            </p>
        </div>

        <div class="main-content">
            <p class="dear">Dear Nama tertanggung,</p>
            <p class="insurance-policy">GROUP LIFE INSURANCE POLICY NO. GL- No Polis
                <br>TO ATTEND ADDITIONAL MEDICAL TESTS AND/OR FURNISH ADDITIONAL INFORMATION
            </p>
            <p class="confirmation">Having reviewed the underwriting documents received (be it completed health
                declaration form/medical reports and results from our panel doctors/ medical reports from your own
                doctor/additional information furnished), we would like to invite you to attend to the following within
                Four (4) Weeks from the date of this letter before full coverage can be considered.</p>
            <p>You are kindly requested to furnish the following information for our review. Please send the information
                to the undersigned directly</p>
            <table>
                <thead>
                    <tr>
                        <th>Policy Number</th>
                        <th>Certificate Number</th>
                        <th>Name of Member / Dependant</th>
                        <th>REL</th>
                        <th>Coverage</th>
                        <th>No-Evidence Limit/ <br>Current Amt of Insurance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6">I MADE SUARTHA</td>
                    </tr>
                    <tr>
                        <td>0000002131</td>
                        <td>0201600975</td>
                        <td>I MADE SUARTHA</td>
                        <td>M</td>
                        <td>YRT LIFE</td>
                        <td>IDR 250,000,000</td>
                    </tr>
                </tbody>
            </table>

            <p class="note">Please forward the enclosed letter to the member for this/her necessary reference</p>
            <p class="enquiry">Should you have any enquiry, please feel free to contact the undersigned at Tel :
                57898188 E.8501.</p>

            <div class="signature">
                <p class="yours-sincerely">Yours sincerely,</p>
                <div class="spaced-paragraph"></div>
                <p class="underwriting">Underwriting</p>
                <p class="group-services">Group Service Department</p>
            </div>

            <div class="cc">
                <p>cc.</p>
            </div>

            <div class="encl">
                <p>Encl</p>
            </div>

            <div class="note-rel">
                <p>Note: REL : Relationship; M: Member</p>
            </div>
        </div>
    </main>

    <footer>
        <p class="footer-text">DC01</p>
    </footer>

</body>

</html>
