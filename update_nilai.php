<html>
<head>
    <title>Proses Update Nilai</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body>

<?php
    include "koneksi.php";
    //membaca jumlah mahasiswa (n) dari submit.php
    $jumMhs = $_POST['n'];
    //membaca kode MK yang akan diupdate
    $kodeMK = $_POST['kodemtk'];
    //proses looping untuk membaca nilai dan nim mhs dari form, serta menjalankan query
    for($i=1; $i<=$jumMhs; $i++){
        //membaca nim mhs ke-i, 1,2,3...,n
        $nimMhs= $_POST['nim'.$i];
        //membaca nilai mhs ke-1, i=1,2,3...,n
        $nilai = $_POST['grade'.$i];
        //update nilai mhs ke-i, i=1,2,3,...,n
        $query = "UPDATE nilai SET grade = '$nilai' WHERE nim = '$nimMhs' AND kodemtk = '$kodeMK'";
        mysqli_query($link,$query);
    }
    echo"<meta http-equiv='refresh' content='0; url=pilih_input_nilai.php'>";
?>
</body>
</html>