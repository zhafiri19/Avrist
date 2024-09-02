<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ 'css/collection/summaryreportageing.css' }}">
</head>

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
