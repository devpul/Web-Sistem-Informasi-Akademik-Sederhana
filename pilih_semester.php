<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Semester</title>
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items:center ;
            height: 100vh;
            margin: 0;
            background-image: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        ol {
            padding-left: 0;
            list-style-type: none;
        }
        ol li {
            margin: 10px 0;
        }
        ol li a {
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        ol li a:hover {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pilih Semester</h1>
        <ol>
            <li><a href="kontrak.php?semester=I">Semester I</a></li>
            <li><a href="kontrak.php?semester=II">Semester II</a></li>
            <li><a href="kontrak.php?semester=III">Semester III</a></li>
            <li><a href="kontrak.php?semester=IV">Semester IV</a></li>
            <li><a href="kontrak.php?semester=V">Semester V</a></li>
            <li><a href="kontrak.php?semester=VI">Semester VI</a></li>
        </ol>
    </div>
</body>
</html>
