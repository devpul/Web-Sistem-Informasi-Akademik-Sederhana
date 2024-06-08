<html>
<head>  
    <title>Kontrak Matakuliah</title>
    <link rel = 'stylesheet' href="stylecreate.css"/>

    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
        <form method = "post" action ="proses_kontrak.php">
            <table border=1>
                <tr>
                    <td colspan='2'>Pilih Nama Mahasiswa :
                    <select name="nim">
                        <?php
                            include "koneksi.php";
                            $query = "SELECT * FROM Mahasiswa";
                            $hasil = mysqli_query($link,$query);
                            while($data = mysqli_fetch_array($hasil))
                            {
                                echo "<option value='".$data['nim']."'>"
                                .$data['nim']."&nbsp|$nbsp ".$data['nama']."</option>";
                            }
                        ?>
                    </select>
                        </td>
                            </tr>
                                <tr><th style="display:flex; justify-content:center;">KODE | NAMA MATA KULIAH</th><th>SKS</th></tr>
                        <?php
                            $semester = isset($_GET['semester'])?$_GET['semester']:'';
                            $query = "SELECT * FROM matakuliah WHERE semester = '$semester'";
                            $hasil = mysqli_query($link,$query);
                            $no = 1;
                            while ($data = mysqli_fetch_array($hasil))
                            {
                                echo "<tr>
                                        <td><input type='checkbox'
                                            value='$data[kodemtk]' name='mtk$no'>$data[kodemtk]-$data[namamtk]
                                        </td>
                                        <td align='center'>$data[sks]</td>
                                    </tr>";
                                    $no++;
                            }
                        ?>
                        <input type="hidden" name="jummk"
                        value="<?php echo $no-1; ?>" />
                        <tr>
                            <td align="center" colspan='2'>
                            <button type="submit" name="submit" value="Submit">Submit</td>
                        </tr>
            </table>    
        </form>
</body>
</html>