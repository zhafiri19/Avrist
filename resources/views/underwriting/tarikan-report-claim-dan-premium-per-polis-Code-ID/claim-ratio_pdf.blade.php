<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claim Ratio</title>
    {{-- <link rel="stylesheet" href="styles.css"> --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            /* width: 10%; */
            margin: 20px auto;
            padding: 10px;
            /* background-color: #fff; */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .claim-info h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .claim-info table {
            width: 100%;
            line-height: 1.8;
        }

        .claim-info td {
            padding: 5px;
        }

        .claim-info td:first-child {
            width: 200px;
        }

        .claim-info td:nth-child(2) {
            width: 10px;
            text-align: center;
        }

        .claim-table {
            margin-top: 50px;
        }

        .claim-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .claim-table th,
        .claim-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .claim-table th {
            background-color: #f4f4f4;
            color: #333;
        }

        .claim-table td {
            color: #555;
        }

        .claim-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="claim-info">
            <h2>Claim Ratio</h2>
            <table>
                <tr>
                    <td><strong>Policy No.</strong></td>
                    <td>:</td>
                    <td>0000092858</td>
                </tr>
                <tr>
                    <td><strong>Policy Name</strong></td>
                    <td>:</td>
                    <td>RIA INDONESIA, PT</td>
                </tr>
                <tr>
                    <td><strong>Sub Office</strong></td>
                    <td>:</td>
                    <td>100 - RIA INDONESIA, PT</td>
                </tr>
                <tr>
                    <td><strong>Date From</strong></td>
                    <td>:</td>
                    <td>Feb 14 2023 To Feb 13 2024</td>
                </tr>
                <tr>
                    <td><strong>Type of Product</strong></td>
                    <td>:</td>
                    <td>All</td>
                </tr>
                <tr>
                    <td><strong>Type of Business</strong></td>
                    <td>:</td>
                    <td>All</td>
                </tr>
            </table>
        </div>

        <div class="claim-table">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Sub Off</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Currency</th>
                        <th>Earn Premium</th>
                        <th>Claim Paid</th>
                        <th>Claim Ratio(%)</th>
                        <th>Business Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                        <td>Data 4</td>
                        <td>Data 5</td>
                        <td>Data 6</td>
                        <td>Data 7</td>
                        <td>Data 8</td>
                        <td>Data 9</td>
                    </tr>
                    <tr>
                        <td colspan="5">Total</td>
                        <td>1,947,404,655.00</td>
                        <td>1,678,935,588.00</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
