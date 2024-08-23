<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    {{-- <link rel="stylesheet" href="styles.css"> --}}
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        tfoot .footer-text {
            text-align: center;
            padding: 8px;
            border-top: 1px solid black;
            /* Garis horizontal di atas */
            border-bottom: 2px solid black;
            /* Garis horizontal di bawah */
            font-weight: bold;
        }

        tfoot .footer-details {
            vertical-align: top;
        }

        .left {
            padding-left: 5px;
            /* Jarak 5px ke kanan */
            text-align: left;
        }

        .right {
            text-align: right;
            padding-right: 5px;
            /* Jarak 5px ke kiri */
        }
    </style>
</head>

<body>
    <footer>
        <table>
            <tfoot>
                <tr>
                    <td colspan="11" class="footer-text">
                        1234 Street Name, City, Country
                    </td>
                </tr>
                <tr class="footer-details">
                    <td class="left">DGMD504</td>
                    <td colspan="9">ssd</td>
                    <td class="right">Page 1</td>
                </tr>
            </tfoot>
        </table>
    </footer>
</body>

</html>
