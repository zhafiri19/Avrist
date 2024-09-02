<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Billing</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin-top: 0;
        padding: 1px;
        margin-bottom: 0;
    }

    .container {

        padding: 10px;
        margin: 0 auto;

    }

    header {
        /* display: flex; */
        /* justify-content: space-between; */
        align-items: center;
        padding-bottom: 0;
    }

    header h1 {
        font-size: 10pt;
        text-align: left;
        padding-left: 140px;
        pading: 0;
    }

    .details {
        margin-bottom: 1px;
    }

    .details h2 {

        font-size: 10pt;
        color: #fbfeff;
        background-color: #945fb3;
        padding: 8px;
        line-height: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        /* margin-bottom: 5px; */
        padding-bottom: 0;
    }



    table,
    th,
    td {
        border: 1px solid #7a7575;

    }

    th,
    td {
        padding: 5px;
        font-weight: normal;
        font-size: 8px;
        text-align: right;
        border: 1px solid #272323;
    }

    th {
        text-align: center;
    }

    .striped-table {
        width: 100%;
        border-collapse: collapse;
        margin: 10px 0;
    }

    .striped-table th,
    .striped-table td {
        border: 1px solid #ddd;
        padding: 5px;
        text-align: right;
    }

    .striped-table th {
        border: 1px solid #ddd;
        padding: 5px;
        text-align: center;
    }

    .striped-table tr:nth-child(even) {
        background-color: rgb(216, 216, 216);
        /* Warna latar belakang untuk baris genap */
    }

    .striped-table tr:nth-child(odd) {
        background-color: white;
        /* Warna latar belakang untuk baris ganjil */
    }

    tfoot td {
        padding: 5px;
        /* text-align: left; */
        font-weight: normal;
        font-size: 9px;
        text-align: right;
        border: none;

    }

    footer {
        text-align: center;
        padding-top: 20px;
        /* border-top: 2px solid #eaeaea; */
    }

    footer p {
        margin: 0;
        font-size: 14px;
        color: #777;
    }

    /* ============================================================================================================= */
</style>

<body>
    <header>
        <h1>AR EBD by CHANNEL CATEGORY</h1>
    </header>


    <div class="details">
        <h2>AR EBD 8-Sep-20</h2>
    </div>
    <table class="striped-table">
        <tr>
            <th style="text-align: left">Channel</th>
            <th>Original Amount Billing</th>
            <th>% Agn</th>
            <th>0 - 30</th>
            <th>31 - 60</th>
            <th>61 - 9</th>
            <th>91 - 120</th>
            <th>121 - 180</th>
            <th> 181 - 360</th>
            <th>More 360</th>
        </tr>
        <tr>
            <td style="text-align: left">BROKER</td>
            <td>48.39</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>69.43 </td>
        </tr>
        <tr>
            <td style="text-align: left">AGENT</td>
            <td>48.39</td>
            <td>13.21%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>3.34 </td>
        </tr>
        <tr>
            <td style="text-align: left">DIREC</td>
            <td>48.39</td>
            <td>9.08%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>25.53 </td>
        </tr>
        <tr>
            <td style="text-align: left">IFA</td>
            <td>48.39</td>
            <td> 6.10%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>16.79 </td>
        </tr>
        <tr>
            <td style="text-align: left">IFA AGENCY </td>
            <td>48.39</td>
            <td> 1.64%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>7.06 </td>
        </tr>
        <tr>
            <td style="text-align: left">EBA </td>
            <td>48.39</td>
            <td> 0.28%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>7.73 </td>
        </tr>
        <tr>
            <td style="text-align: left">Grand Total </td>
            <td>69.43</td>
            <td>100.00%</td>
            <td>25.53</td>
            <td> 16.79</td>
            <td> 7.06</td>
            <td> 7.73</td>
            <td> 4.51</td>
            <td> 5.7</td>
            <td> 2.07</td>
        </tr>
        <!-- Add more rows as needed -->
        {{-- <tfoot>
            </tfoot> --}}
    </table>
    {{-- </section> --}}
    {{-- ===========================================================table 2 ========================================================= --}}

    <div class="details">
        <h2>AR EBD 8-Sep-20 - OS Latest Date</h2>
    </div>
    <table class="striped-table">
        <tr>
            <th> </th>
            <th> </th>
            <th>Original Amount Billing</th>
            <th>% Agn</th>
            <th> Collected</th>
            <th> % Col</th>
            <th>OS Current Week </th>
            <th> % Agn Current Week</th>
        </tr>
        <tr>
            <td style="text-align: left">Aging Over 30 Day</td>
            <td style="text-align: left"> BROKER</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left"> AGENT</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left"> DIRECT</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left">IFA</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left"> IFA AGENCY</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left"> EBA</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td style="text-align: left">Grand Tota</td>
            <td></td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>

    </table>
    {{-- =================================================== TABLE 3 ================================================================== --}}
    <div class="details">
        <h2>AR EBD - OS Latest Date</h2>
    </div>
    <table class="striped-table">
        <tr>
            <th style="text-align: left">Channel</th>
            <th>OS Current Week</th>
            <th>% Agn Current Week</th>
            <th>0 - 30</th>
            <th>31 - 60</th>
            <th>61 - 9</th>
            <th>91 - 120</th>
            <th>121 - 180</th>
            <th> 181 - 360</th>
            <th>More 360</th>
        </tr>
        <tr>
            <td style="text-align: left">BROKER</td>
            <td>48.39</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>69.43 </td>
        </tr>
        <tr>
            <td style="text-align: left">AGENT</td>
            <td>48.39</td>
            <td>13.21%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>3.34 </td>
        </tr>
        <tr>
            <td style="text-align: left">DIREC</td>
            <td>48.39</td>
            <td>9.08%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>25.53 </td>
        </tr>
        <tr>
            <td style="text-align: left">IFA</td>
            <td>48.39</td>
            <td> 6.10%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>16.79 </td>
        </tr>
        <tr>
            <td style="text-align: left">IFA AGENCY </td>
            <td>48.39</td>
            <td> 1.64%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>7.06 </td>
        </tr>
        <tr>
            <td </td>
            <td>48.39</td>
            <td> 1.64%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>7.06 </td>
        </tr>
        <tr>
            <td style="text-align: left">EBA </td>
            <td>48.39</td>
            <td> 0.28%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
            <td>3.86</td>
            <td>7.73 </td>
        </tr>
        <tr>
            <td style="text-align: left">Grand Total </td>
            <td>69.43</td>
            <td>100.00%</td>
            <td>25.53</td>
            <td> 16.79</td>
            <td> 7.06</td>
            <td> 7.73</td>
            <td> 4.51</td>
            <td> 5.7</td>
            <td> 2.07</td>
        </tr>
        <tfoot>
            <tr>
                <td style="text-align: left">Total % to OS AR</td>
                <td>100 %</td>
                <td> </td>
                <td>74.03%</td>
                <td>19.20% </td>
                <td>0.15% </td>
                <td> 1.68%</td>
                <td>0.29% </td>
                <td>0.80% </td>
                <td> 3.84%</td>
            </tr>
        </tfoot>
    </table>
    {{-- ==================================================================table 4========================================================= --}}
    <div class="details">
        <h2> AR EBD 8-Sep-20 and Additional Until Latest Date </h2>

    </div>
    <table class="striped-table">
        <tr>
            <th> </th>
            <th> </th>
            <th>Original Amount Billing</th>
            <th>% Agn</th>
            <th> Collected</th>
            <th> % Col</th>
            <th>OS Current Week </th>
            <th> % Agn Current Week</th>
        </tr>
        <tr>
            <td style="text-align: left">Aging Over 30 Day</td>
            <td style="text-align: left"> BROKER</td>
            <td>20.7</td>
            <td>2.4% </td>
            <td>12.5 </td>
            <td>60.4% </td>
            <td>8.2</td>
            <td> 46.25%</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left">AGENT</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left"> IFA AGENCY</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left"> IFA</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left"> DIRECT</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left"> EBA</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td style="text-align: left">Aging Over 30 Day</td>
            <td style="text-align: left"> BROKER</td>
            <td>20.7</td>
            <td>2.4% </td>
            <td>12.5 </td>
            <td>60.4% </td>
            <td>8.2</td>
            <td> 46.25%</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left">AGENT</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left"> IFA AGENCY</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left"> IFA</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left"> DIRECT</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: left"> EBA</td>
            <td>69.69%</td>
            <td>13.58</td>
            <td>14.95</td>
            <td>5.13</td>
            <td>6.74</td>
            <td>3.34</td>
        </tr>
        <tr>
            <td style="text-align: left">Grand Total</td>
            <td></td>
            <td>20.7</td>
            <td>2.4% </td>
            <td>12.5 </td>
            <td>60.4% </td>
            <td>8.2</td>
            <td> 46.25%</td>
        </tr>
    </table>
    <footer>

    </footer>

</body>

</html>
