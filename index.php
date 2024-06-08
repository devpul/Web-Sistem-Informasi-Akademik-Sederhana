<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>
    <link rel="stylesheet" href="styleindex.css" />
    <!-- Feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin: 10px 0;
        }
        ul li a {
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        ul li a i {
            margin-right: 8px;
        }
        ul li a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>WEB SISTEM INFORMASI AKADEMIK</h1>
        <ul>
            <li><a href='tambah_mahasiswa.php'><i data-feather="plus-circle"></i> Tambah Mahasiswa</a></li>
            <li><a href='tambah_matkul.php'><i data-feather="plus-circle"></i> Tambah Matakuliah</a></li>
            <li><a href='tampil_mahasiswa.php'><i data-feather="eye"></i> Lihat Mahasiswa</a></li>
            <li><a href='tampil_matkul.php'><i data-feather="eye"></i> Lihat MataKuliah</a></li>
            <li><a href='pilih_semester.php'><i data-feather="book-open"></i> Pilih Semester</a></li>
            <li><a href='pilih_input_nilai.php'><i data-feather="edit"></i> Input Nilai Mahasiswa</a></li>
            <li><a href='update_nilai.php'><i data-feather="refresh-cw"></i> Update Nilai Mahasiswa</a></li>
        </ul>
    </div>
    <script>
        feather.replace();
    </script>
</body>
</html>
