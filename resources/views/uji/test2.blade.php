<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alignment Example</title>
    {{-- <link rel="stylesheet" href="styles.css"> --}}
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .currency-cell {
            display: flex;
            justify-content: space-between;
            padding: 8px;
            border: 1px solid #ddd;
        }

        .currency {
            text-align: left;
        }

        .amount {
            text-align: right;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <td class="currency-cell">
                <span class="currency">IDR</span>
                <span class="amount">250.000</span>
            </td>
        </tr>
    </table>

</body>

</html>
