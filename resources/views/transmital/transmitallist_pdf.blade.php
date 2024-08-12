<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/transmital/transmitallist.css' }}">
</head>

<body>

    <div class="header">
        <div class="header-text">
            <h1>PT AVRIST ASSURANCE</h1>
            <p>Employee Benefit Department</p>
            <p>Transmittal Slip</p>
        </div>
        {{-- logo Avrist --}}
        <div class="header-logo">
            <img src="{{ 'avrist.png' }}" alt="PT Avrist Assurance">
        </div>
    </div>

    {{-- surat pertama --}}
    <div class="transmittal-slip">
        <table class="content-table" border="1">
            <tr>
                <td class="left">To :</td>
                <td class="left-content">xxxxxxxx</td>
                <td class="spacer"></td>
                <td class="right">No :</td>
                <td class="right-content">006991/OUT/2023</td>
            </tr>
            <tr>
                <td class="left">Attn :</td>
                <td colspan="4" class="left-content">Mrs. Rezilina Tasya</td>
            </tr>
            <tr>
                <td colspan="5" class="cover-note">
                    Under cover of this transmittal, we are forwarding you the following:
                </td>
            </tr>
            <tr>
                <td colspan="5" class="billing-section">
                    1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Billing
                    NO. C3110100 FOR CLIENT XXXXXXX - NB
                    <div class="spacing"></div>
                </td>
            </tr>
            <tr>
                <td class="left">Sent by :</td>
                <td class="left-content">Rara Fitria Rachma Putri - Outsource</td>
                <td class="spacer"></td>
                <td class="right">Received by :</td>
                <td class="right-content"></td>
            </tr>
            <tr>
                <td class="left">Date :</td>
                <td class="left-content">07 Nov 2023</td>
                <td class="spacer"></td>
                <td class="right">Date :</td>
                <td class="right-content"></td>
            </tr>
        </table>
        <div class="horizontal-line"></div>
    </div>


    {{-- surat kedua --}}
    <div class="header">
        <div class="header-text">
            <h1>PT AVRIST ASSURANCE</h1>
            <p>Employee Benefit Department</p>
            <p>Transmittal Slip</p>
        </div>
        {{-- logo Avrist --}}
        <div class="header-logo">
            <img src="{{ 'avrist.png' }}" alt="PT Avrist Assurance">
        </div>
    </div>

    {{-- isi surat kedua --}}
    <div class="transmittal-slip">
        <table class="content-table" border="1">
            <tr>
                <td class="left">To :</td>
                <td class="left-content">xxxxxxxx</td>
                <td class="spacer"></td>
                <td class="right">No :</td>
                <td class="right-content">006991/OUT/2023</td>
            </tr>
            <tr>
                <td class="left">Attn :</td>
                <td colspan="4" class="left-content">Mrs. Rezilina Tasya</td>
            </tr>
            <tr>
                <td colspan="5" class="cover-note">
                    Under cover of this transmittal, we are forwarding you the following:
                </td>
            </tr>
            <tr>
                <td colspan="5" class="billing-section">
                    1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Billing NO. C3110100 FOR CLIENT
                    xxxxxxxxxxxxxxxxxxx
                    <div class="spacing"></div>
                </td>
            </tr>
            <tr>
                <td class="left">Sent by :</td>
                <td class="left-content">Rara Fitria Rachma Putri - Outsource</td>
                <td class="spacer"></td>
                <td class="right">Received by :</td>
                <td class="right-content"></td>
            </tr>
            <tr>
                <td class="left">Date :</td>
                <td class="left-content">07 Nov 2023</td>
                <td class="spacer"></td>
                <td class="right">Date :</td>
                <td class="right-content"></td>
            </tr>
        </table>
    </div>
</body>

</html>
