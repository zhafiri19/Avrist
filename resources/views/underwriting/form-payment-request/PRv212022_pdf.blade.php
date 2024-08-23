<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Pagination Example</title>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <style>
        @page {
            margin: 20mm;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .content {
            width: 100%;
            max-width: 800px;
            margin: auto;
        }

        .page {
            page-break-after: always;
            /* Ensure each page starts on a new page */
            padding: 20px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        .page-break {
            page-break-before: always;
        }

        h1 {
            font-size: 24px;
        }

        p {
            font-size: 16px;
        }
    </style>
</head>

<body>

    <div class="content">
        <div class="page">
            <h1>Page 1</h1>
            <p>Content for page 1...</p>
            <!-- Add enough content to ensure page breaks -->
            <div class="page-break"></div>
        </div>

        <div class="page">
            <h1>Page 2</h1>
            <p>Content for page 2...</p>
            <div class="page-break"></div>
        </div>

        <div class="page">
            <h1>Page 3</h1>
            <p>Content for page 3...</p>
            <div class="page-break"></div>
        </div>

        <div class="page">
            <h1>Page 4</h1>
            <p>Content for page 4...</p>
            <div class="page-break"></div>
        </div>

        <div class="page">
            <h1>Page 5</h1>
            <p>Content for page 5...</p>
            <div class="page-break"></div>
        </div>

        <div class="page">
            <h1>Page 6</h1>
            <p>Content for page 6...</p>
            <div class="page-break"></div>
        </div>

        <div class="page">
            <h1>Page 7</h1>
            <p>Content for page 7...</p>
        </div>
    </div>

</body>

</html>
