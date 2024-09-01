<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dua Kolom dengan Otomatis Pindah Halaman</title>
    {{-- <link rel="stylesheet" href="styles.css"> --}}
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .page {
            page-break-after: always;
            /* This ensures the page breaks after the content is full */
            width: 100%;
            height: 100vh;
            /* Set to full height of the page */
            display: table;
            border: 1px solid #000;
            /* Optional: just for visualization */
        }

        .container {
            display: table;
            width: 100%;
            height: 100%;
        }

        .column {
            display: table-cell;
            vertical-align: top;
            width: 50%;
            padding: 20px;
        }

        .left {
            background-color: #f0f0f0;
            /* Optional: just for visualization */
        }

        .right {
            background-color: #e0e0e0;
            /* Optional: just for visualization */
        }

        /* Ensure content breaks to the next page when the first page is full */
        @media print {
            .page {
                page-break-after: always;
            }
        }
    </style>
</head>

<body>
    <div class="page">
        <div class="container">
            <div class="column left">
                <p>Konten di kolom kiri...</p>
                <!-- Tambahkan konten lain di sini -->
            </div>
            <div class="column right">
                <p>Konten di kolom kanan...</p>
                <!-- Tambahkan konten lain di sini -->
            </div>
        </div>
    </div>
</body>

</html>
