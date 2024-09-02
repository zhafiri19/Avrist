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
        /* font-size: 10pt; */

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
        font-size: 10px;
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
        font-size: 10px;
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

    .header1 {

        font-size: 16px;
        margin-left: 140px;
    }

    .header2 {
        margin-left: 170px;
        font-size: 10px;
    }

    .header3 {
        margin-left: 90px;
        font-size: 10px;
    }

    /* ============================================================================================================= */
</style>

<body>
    <p>
        <span class="header1">SUMMARY AR EBD</span>
        <span class="header2">Latest Date</span>
        <span class="header3">26 October 2023</span>
    </p>

    <div class="details">
        <h2>AR EBD 8-Sep-20</h2>
    </div>
    <table class="striped-table">
        <tr>
            <th></th>
            <th>Original Amount Billing</th>
            <th>% Agn</th>
        </tr>
        <tr>
            <td style="text-align: left">Aging Under 30 Days</td>
            <td>25.53</td>
            <td>36.77</td>
        </tr>
        <tr>
            <td style="text-align: left">Aging Over 30 Days </td>
            <td>43.9</td>
            <td>63.23%</td>
        </tr>
        <tr>
            <td style="text-align: left">Grand Total</td>
            <td>69.43</td>
            <td>100.00%</td>
        </tr>
    </table>
    {{-- ===========================================================table 2 ========================================================= --}}

    <div class="details">
        <h2>AR EBD 8-Sep-20 - OS Latest Date</h2>
    </div>
    <table class="striped-table">
        <tr>
            <th> </th>
            <th>Original Amount Billing</th>
            <th>Collected</th>
            <th> % Col</th>
            <th>OS Current Week </th>
            <th> % Agn Current Week</th>
        <tr>
            <td style="text-align: left">Aging Over 30 Days</td>
            <td>69.43</td>
            <td>69.11</td>
            <td>99.54%</td>
            <td>0.3</td>
            <td>100.00%</td>
        </tr>
        <tr>
            <td style="text-align: left">Grand Tot</td>
            <td>69.43</td>
            <td>69.11</td>
            <td>99.54%</td>
            <td>0.3</td>
            <td>100.00%</td>
        </tr>

    </table>
    {{-- =================================================== TABLE 3 ================================================================== --}}
    <div class="details">
        <h2>AR EBD - OS Latest Date</h2>
    </div>
    <table class="striped-table">
        <table class="striped-table">
            <tr>
                <th> </th>
                <th>Original Amount Billing</th>
                <th>Collected</th>
                <th> % Col</th>
                <th>OS Current Week </th>
                <th> % Agn Current Week</th>
            <tr>
                <td style="text-align: left">Aging Over 30 Days</td>
                <td>835.2</td>
                <td>834.5</td>
                <td>99.92%</td>
                <td>4.6</td>
                <td>26%</td>
            </tr>
            <tr>
                <td style="text-align: left">Aging Under 30 Day</td>
                <td>45.7</td>
                <td>33.2</td>
                <td>72.63%</td>
                <td>13.1</td>
                <td>74%</td>
            </tr>
            <tr>
                <td style="text-align: left">Grand Tot</td>
                <td>880.9</td>
                <td>867.7</td>
                <td>98.50%</td>
                <td>17.7</td>
                <td>100%</td>
            </tr>
        </table>
</body>

</html>
