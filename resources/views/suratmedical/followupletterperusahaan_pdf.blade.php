<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/suratmedical/followupletterperusahaan.css' }}">
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
            <p class="company-name">Nama Perusahaan</p>
            <p class="address">Alamat Perusahaan
            </p>
            <p class="attn">Attn: PIC Perusahaan</p>
        </div>
        <div class="main-content">
            <p class="dear">Dear Policyholder,</p>

            <p class="insurance-policy">GROUP LIFE INSURANCE POLICY NO. GL- No Polis <br> TO ATTEND ADDITIONAL MEDICAL
                TESTS
                AND/OR FURNISH ADDITIONAL INFORMATION <br>NAME OF MEMBER : Nama member dan nomer certificate</p>
            <p>Having reviewed the completed health declaration form/medical reports on the above
                named member, we require him/her to attend further medical tests and/or furnish further information
                before full coverage can be considered</p>
            <p>In the meantime, the coverage of the member is as follows : </p>

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

            <p>Please forward the enclosed letter to the member for his/her necessary action. Kindly advise the member
                to comply with our requirements within FOUR (4) WEEKS from the date of this letter</p>
            <p>Should you have any enquiry, please feel free to contact the undersigned at Tel :
                57898188 E.8501</p>
            <p>Thank you for attention</p>

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
        <p class="footer-text">FC01</p>
    </footer>

</body>

</html>
