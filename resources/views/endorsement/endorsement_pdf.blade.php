<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Nama</title>
    {{-- <link rel="stylesheet" href="styles.css"> --}}
    <style>
        /* Basic styling for the entire page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Styling for the card */
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
            /* Center the card horizontally */
        }

        /* Center the card content */
        .card-content {
            text-align: center;
            /* Center text inside the card */
        }

        .card-content h1 {
            margin: 0;
            font-size: 1.5em;
            /* Adjust font size as needed */
            color: #333;
            /* Text color */
        }

        .card-content p {
            margin: 5px 0;
            font-size: 1em;
            /* Adjust font size as needed */
            color: #666;
            /* Text color */
        }

        /* Print-specific styling */
        @media print {
            body {
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .card {
                border: none;
                box-shadow: none;
                width: 300px;
                /* Adjust the width for print if needed */
                margin: 0;
                /* Remove margin for print */
                page-break-inside: avoid;
                /* Avoid breaking the card across pages */
            }
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-content">
            <h1>Nama Anda</h1>
            <p>Posisi/Jabatan</p>
            <p>Perusahaan</p>
            <p>Email: email@example.com</p>
            <p>Telepon: (123) 456-7890</p>
        </div>
    </div>
</body>

</html>
