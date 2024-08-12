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
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
            color: #333;
        }

        td {
            color: #555;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Claim Ratio</h1>
        <table>
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Claim Amount</th>
                    <th>Total Amount</th>
                    <th>Ratio (%)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Category A</td>
                    <td>$5000</td>
                    <td>$10000</td>
                    <td>50%</td>
                </tr>
                <tr>
                    <td>Category B</td>
                    <td>$3000</td>
                    <td>$12000</td>
                    <td>25%</td>
                </tr>
                <tr>
                    <td>Category C</td>
                    <td>$2000</td>
                    <td>$8000</td>
                    <td>25%</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
