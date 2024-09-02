<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/suratmedical/limitletter.css' }}">
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
            <p class="date">November 14, 2023</p>
            <p class="company-name">Nama Perusahaan</p>
            <p class="address">Alamat Perusahaan
            </p>
            <p class="attn">Attn: PIC Perusahaan</p>
        </div>
        <div class="main-content">
            <p class="dear">Dear Policyholder,</p>
            <p class="insurance-policy">GROUP LIFE INSURANCE POLICY NO. GL- No Polis
                <br>REMINDER
            </p>
            <p>We wish to inform you that we have not received the medical results and/or the necessary documents
                required on the following member(s). As such, their group insurance coverage is limited to the current
                amount of insurance as stated below.</p>

            <table>
                <thead>
                    <tr>
                        <th>Policy Number</th>
                        <th>Certificate Number</th>
                        <th>Name of Member / Dependant</th>
                        <th>REL</th>
                        <th>Coverage</th>
                        <th></th>
                        <th>Current Amount of Insurance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="7">ARMADA H. DONAL MANGUNSONG</td>
                    </tr>
                    <tr>
                        <td>0000020258</td>
                        <td>0000000030</td>
                        <td>ARMADA .H DONAL MANGUNSONG</td>
                        <td>M</td>
                        <td>YRT LIFE</td>
                        <td>IDR</td>
                        <td>6,161,556,492</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td>TPD</td>
                        <td>IDR</td>
                        <td>6,161,556,492</td>
                    </tr>
                </tbody>
            </table>

            <p>However, if the above member(s) have already complied with our requirements, we would appreciate it if
                you could let us know immediately at Tel:.</p>

            <div class="signature">
                <p class="yours-sincerely">Yours sincerely,</p>
                <div class="spaced-paragraph"></div>
                <p class="group-services">Group Service Department</p>
            </div>

            <div class="cc">
                <p>cc. MARSH INDONESIA, PT, BROKER, DKI</p>
            </div>

            <div class="note-rel">
                <p>Note: REL : Relationship; M: Member</p>
            </div>
        </div>
    </main>

    <footer>
        <p class="footer-text">LC01</p>
    </footer>

</body>

</html>
