<html>
<head>
    <title>Pilih Matakuliah</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body>
<form method="post" action="proses_input_nilai.php">
    <center>
        Pilih Matakuliah :
    <select name="kodemtk">
        <?php
            include "koneksi.php";
            $query = "SELECT * FROM matakuliah ORDER BY semester";
            $hasil = mysqli_query($link,$query);
            while ($data = mysqli_fetch_array($hasil))
            {
                echo "<option value='".$data['kodemtk']."'>".$data['semester']." - ".$data['kodemtk']." - ".$data['namamtk']."</option>";
            }
        ?>
    </select>
    <input type = "submit" value="OK">
</form>
</body>

</html>