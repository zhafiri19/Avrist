<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/suratmedical/rateupletter.css' }}">
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
            <p class="date">March 30, 2023</p>
            <p class="company-name">Nama Perusahaan</p>
            <p class="address">Alamat Perusahaan
            </p>
            <p class="attn">Attn: PIC Peserta</p>
        </div>
        <div class="main-content">
            <p class="re-policynumber">Re : Medical Underwriting of MIRZA T NUGROHO AZIS
                <br>Policy Number : No Polis
            </p>
            <p class="dear">Dear Avrist Policy Holder,</p>
            <p>Related to the result of medical examination of MIRZA T NUGROHO AZIS, we hereby would like to inform that
                MIRZA T NUGROHO AZIS is able to be protected by PT. Avrist Assurance under the following extra premium
                rate due to his medical result</p>

            <table>
                <thead>
                    <tr>
                        <th>Certificate</th>
                        <th>Coverage</th>
                        <th>New Sum Assured IDR</th>
                        <th>NEL Policy IDR</th>
                        <th>Extra Premium Rate IDR</th>
                        <th>Annual Premium IDR</th>
                        <th>Total Premium IDR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>00000000172</td>
                        <td>YRT LIFE</td>
                        <td>5,076,227,088</td>
                        <td>3,000,000,000</td>
                        <td>11,159,720.60</td>
                        <td>12,792,092.26</td>
                        <td>23,951,812.86</td>
                    </tr>
                </tbody>
            </table>

            <p>Please be informed that the extra premium rate in this letter is just estimation. The actual extra
                premium rate shall be determined thereafter in the invoice, which will be issued after you sign and
                return this letter to us as the confirmation of your acceptance of the extra premium rate.</p>
            <p>The coverage of the New Sum Assured will be effective after we receive the confirmation of your
                acceptance. Otherwhise the insurance amount of captioned member coverage is limited to the No Evidence
                Limit.</p>

            {{-- Tanda Tangan --}}
            {{-- tanda tangan di kiri --}}
            <div class="signature">
                <div class="column">
                    <div class="company-name">
                        <p>Yours faithfully,</p>
                        <p>Avrist Assurance, PT</p>
                    </div>
                    <div class="signature-section">
                        <img src="" alt="Signature" class="signature-img">
                        <div class="signature-line"></div>
                    </div>
                    <div class="name-date">
                        <p>Name : Underwriting</p>
                        <p>Date : </p>
                    </div>
                </div>

                {{-- tanda tangan di kanan --}}
                <div class="column">
                    <div class="company-name">
                        <p>Acknowledged and approved by,</p>
                        <p>MARSH INDONESIA, PT</p>
                    </div>
                    <div class="signature-section">
                        <img src="" alt="Signature" class="signature-img">
                        <div class="signature-line"></div>
                    </div>
                    <div class="name-date">
                        <p>Name : Janey Stefanie</p>
                        <p>Date : 31 March 2023</p>
                    </div>
                </div>
            </div>

            <div class="cc">
                <p>cc. MARSH INDONESIA, PT, BROKER, DKI</p>
            </div>
        </div>
    </main>

    <footer>
        <p class="footer-text">RC01</p>
    </footer>

    <div class="page-break"></div>
    {{-- PAGE 2 --}}

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
            <p class="date">March 30, 2023</p>
            <p class="company-name">Nama Perusahaan</p>
            <p class="address">Alamat Perusahaan
            </p>
            <p class="attn">Attn: PIC Peserta</p>
        </div>
        <div class="main-content">
            <p class="re-policynumber">Re : Medical Underwriting Result
                <br> Policy Number : No Polis
            </p>
            <p class="dear">Dear Avrist Policy Holder,</p>
            <p>Related to your result of medical examination, we hereby would like to inform you that you are able to be
                protected by PT. Avrist Assurance under the extra premium
                due to</p>

            <table>
                <thead>
                    <tr>
                        <th>Certificate</th>
                        <th>New Sum Assured IDR</th>
                        <th>Current of Insurance IDR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>00000000172</td>
                        <td>5,076,227,088</td>
                        <td>3,000,000,000</td>
                    </tr>
                </tbody>
            </table>

            <p>Please be informed that the coverage of the New Sum Assured will be efective after we receive the
                confirmation of acceptance from your company. As long as we have not received yet the confirmation of
                acceptance, the insurance amount of your coverage is limited to the Current of Insurance.</p>

            {{-- Tanda Tangan --}}
            {{-- tanda tangan di kiri --}}
            <div class="signature">
                <div class="column">
                    <div class="company-name">
                        <p>Yours faithfully,</p>
                        <p>Avrist Assurance, PT</p>
                    </div>
                    <div class="signature-section">
                        <img src="" alt="Signature" class="signature-img">
                        <div class="signature-line"></div>
                    </div>
                    <div class="name-date">
                        <p>Name : Underwriting</p>
                    </div>
                </div>

                <div class="column"></div>

            </div>

            <div class="cc">
                <p>cc. MARSH INDONESIA, PT, BROKER, DKI</p>
            </div>
        </div>
    </main>

    <footer>
        <p class="footer-text">RC01</p>
    </footer>

</body>

</html>
