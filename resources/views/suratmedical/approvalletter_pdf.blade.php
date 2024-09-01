<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/suratmedical/approvalletter.css' }}">
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
            <p class="date">May 04, 2023</p>
            <p class="company-name">Nama Perusahaan</p>
            <p class="address">PT. MARSH INDONESIA
                WTC 3 LEVEL 16
                Jl. JEND. SUDIRMAN KAV.29
                KUNINGAN, JAKARTA SELATAN
                DKI JAKARTA
            </p>
            <p class="attn">Attn: MS. JANEY STEFANIE</p>
        </div>
        <div class="main-content">
            <p class="dear">Dear Policyholder,</p>

            <p class="insurance-policy">GROUP LIFE INSURANCE POLICY NO. GL- No Polis <br> ACCEPTANCE OF INSURANCE
                COVERAGE</p>
            <p class="confirmation">We are pleased to confirm the coverage of the insured member as follow:</p>

            <table>
                <thead>
                    <tr>
                        <th>Policy Number</th>
                        <th>Certificate Number</th>
                        <th>Name of Member / Dependant</th>
                        <th>Member Status</th>
                        <th>Coverage</th>
                        <th>Amount</th>
                        <th>Effective Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="7">MUHARAM HERU SASONO</td>
                    </tr>
                    <tr>
                        <td>0000020258</td>
                        <td>0000000144</td>
                        <td>Muharam Heru Sasono</td>
                        <td>M</td>
                        <td>YRT LIFE</td>
                        <td>IDR 3,630,784,224</td>
                        <td>May 04, 2023</td>
                    </tr>
                </tbody>
            </table>

            <p class="note">Please note that any additional premium (if applicable) will be billed on the next premium
                date.</p>
            <p class="enquiry">Should you have any enquiry, please feel free to contact the undersigned at Tel : 6221
                57898188 ext. 8501</p>

            <div class="signature">
                <p class="yours-sincerely">Yours sincerely,</p>
                <div class="spaced-paragraph"></div>
                <p class="underwriting">Underwriting</p>
                <p class="group-services">Group Service Department</p>
            </div>

            <div class="cc">
                <p>cc.</p>
            </div>

            <div class="note-rel">
                <p>Note: REL : Relationship; M: Member</p>
            </div>
        </div>
    </main>

    <footer>
        <p class="footer-text">AC01</p>
    </footer>

</body>

</html>
