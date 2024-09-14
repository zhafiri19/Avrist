<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/collection/remindernoticebilling.css' }}">
</head>

<body>
    <div class="header">
        <div class="header-text">
            <h1 class="indonesian-header">Pemberitahuan Tagihan Ulang</h1>
            <p class="english-header">Reminder Notice</p>
        </div>
        {{-- logo Avrist --}}
        <div class="header-logo">
            <img src="{{ 'avrist.png' }}" alt="PT Avrist Assurance">
        </div>
    </div>

    <section class="billing-info">
        <span class="indonesia">Tanggal Cetak</span>
        <span class="colon">:</span>
        <span class="date">02 May, 2024</span>
        <div class="inggris">Statement Date</div>
        <p><b>[100] - PT AVRIST ASSURANCE</b></p>
        <p>GEDUNG WORLD TRADE CENTER II LT. 7
            JL. JEND. SUDIRMAN KAV. 29-31
            JAKARTA
            DKI JAKARTA 12920 INDONESIA
        </p>
        <b>UP : BAPAK GUSTIA RACHMAT ANASRIL</b>
        <h5>CC :</h5>
    </section>

    <table class="table1-2">
        <tr>
            <th>
                <div class="indonesia">No. Polis</div>
                <div class="inggris">Policy No</div>
            </th>
            <th>
                <div class="indonesia">Pemegang Polis</div>
                <div class="inggris">Policyholder</div>
            </th>
            <th>
                <div class="indonesia">Status Polis</div>
                <div class="inggris">Status of Policy</div>
            </th>
        </tr>
        <tr>
            <td>0000093065</td>
            <td>PT AVRIST ASSURANCE</td>
            <td>A</td>
        </tr>
    </table>

    <table class="table1-2">
        <tr>
            <th>
                <div class="indonesia">Tagihan</div>
                <div class="inggris">Billing</div>
            </th>
            <th>
                <div class="indonesia">Mata Uang</div>
                <div class="inggris">Currency</div>
            </th>
            <th>
                <div class="indonesia">Jumlah yang Harus Dibayar</div>
                <div class="inggris">Amount to be Paid</div>
            </th>
        </tr>
        <tr>
            <td>PREMIUM</td>
            <td>IDR</td>
            <td class="angka">257,870,642.00 *</td>
        </tr>
        <tr>
            <td>EXCESS OF CLAIMS</td>
            <td>IDR</td>
            <td class="angka">8,601,097.80 *</td>
        </tr>
    </table>

    <p>* Rincian tagihan dapat dilihat pada lampiran / <i> Please see the attachment
            for the details</i></p>
    <div class="rinci1">
        <p>Menurut catatan kami, per tanggal <b><i>Apr 14,
                    2023,</i></b> pembayaran premi dan/atau excess claim tersebut di atas belum kami
            terima. Agar manfaat polis tetap berlaku, harap membayar tagihan sebelum tanggal
            <b><i>May 29, 2023</i></b>
        </p>
        <p><i>Please be informed that as at <b>Apr 14, 2023</b>, we
                have not received premium and/or excess of claims of the above.</i>
            <i>To keep the policy,
                please settle payment before <b>May 29, 2023</b></i>
        </p>
    </div>

    <div class="titletbl">
        <div class="indonesia">Harap Pembayaran dilakukan ke :</div>
        <div class="inggris">Please make payment to :</div>
    </div>

    <table class="table3">
        <tr>
            <td>Nama Rekening / <i>Account Name</i></td>
            <td>:</td>
            <td>PT Avrist Assurance</td>
        </tr>
        <tr>
            <td>Rekening Bank / <i>Bank Account </i></td>
            <td>:</td>
            <td>MUFG Bank, Ltd </td>
        </tr>
        <tr>
            <td>Nomor Rekening / <i>Account No </i></td>
            <td>:</td>
            <td>1018000003065100 </td>
        </tr>
        <tr>
            <td>Kode Cabang / <i>Branch Code </i></td>
            <td>:</td>
            <td> </td>
        </tr>
        <tr>
            <td><i>SWIFT Code</i></td>
            <td>:</td>
            <td>
            </td>
        </tr>
        <tr>
            <td>Catatan / <i>Remarks </i> </td>
            <td>:</td>
            <td>
                <div class="indonesia">Cantumkan no polis dan nama perusahaan pada saat pembayaran</div>
                <div class="inggris">Please state policy number and company name when making payment</div>
            </td>
        </tr>
    </table>

    <div class="indonesia">Mohon infokan bukti serta detail pembayaran ke : Collection.Team@Avrist.com</div>
    <div class="inggris">Please send the receive and details of payment to : Collection.Team@Avrist.com</div>

    <div class="titletbl">
        <div class="indonesia">Informasi Penting</div>
        <div class="inggris">Important Information</div>
    </div>

    <ol>
        <li>
            <div class="indonesia"> Pembayaran harus sudah kami terima sebelum atau pada tanggal jatuh tempo</div>
            <div class="inggris">Payment must be received before or on the due date</div>
        </li>

        <li>
            <div class="indonesia"> PT Avrist Assurance berhak melakukan penghentian layanan apabila terdapat tunggakan
                tagihan, terdiri atas :</div>
            <div class="inggris">PT Avrist Assurance reserves the right to suspend service if the policy has overdue :
            </div>
            <ul class="strip-bullets">
                <li>Penundaan pembayaran klaim /<i>Pending all claim payment</i> </li>
                <li>Penutupan fasilitas provider Rumah Sakit / <i>Close hospital provider</i></li>
                <li>Pembatalan polis / <i>Terminate the policy</i></li>
            </ul>
        </li>

        <li>
            <div class="indonesia"> Apabila memerlukan informasi lebih lanjut, silahkan menghubungi Customer Service
                kami di (021) 5789 8188 ext
                5231</div>
            <div class="inggris">If need any informations, please contact our Customer Service at (021) 5789 8188 ext
                5231</div>
        </li>
    </ol>
    <div class="rinci1">
        <p>Surat ini merupakan hasil cetakan komputer sehingga tidak diperlukan tanda tangan</p>
        <p><i>This is a computer generated letter, no signature is required</i></p>
    </div>
    <div class="rinci1">
        <p><b>PT. Avrist Assurance</b></p>
        <p>PT Avrist Assurance, Gedung WTC II, Lantai 7, Jl. Jenderal Sudirman Kav 29 - 31, Jakarta 10270
        </p>
        <p> t +62 21 5789 8188</p>
        <p>www.avrist.com</p>

    </div>
</body>

</html>
