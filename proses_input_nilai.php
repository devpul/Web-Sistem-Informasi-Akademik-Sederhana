<html>
<head>
    <title>Proses Input Nilai</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body>

    <?php
        //koneksi ke mysql
        include "koneksi.php";
        //membaca kode matakuliah yang disubmit dari form
        $kodeMK= $_POST['kodemtk'];
        //menampilkan data nim dan nilai mahasiswa yg mengambil matkul berdsrkan kode MK
        $query1= "SELECT * FROM matakuliah WHERE kodemtk='$kodeMK'";
        $hasil1 = mysqli_query($link,$query1);
        $data1= mysqli_fetch_array($hasil1);
        echo "<center><h1>Semester/Kode Matakuliah/Nama Mata Kuliah : <br>".
        "</h1></center>";
    ?>

    <form method ="post" action="update_nilai.php">
        <table width = "80%" border = "1" align = "center">
            <tr>
                <th width = "5%">NO</th>
                <th width = "20%">NIM</th>
                <th width = "65%">NAMA MAHASISWA</th>
                <th width = "10%">NILAI</th>
            </tr>

        <?php
            $query="SELECT * FROM nilai INNER JOIN mahasiswa ON nilai.nim=mahasiswa.nim
            WHERE kodemtk='$kodeMK'";
            $hasil=mysqli_query($link,$query);
            $i = 1;
            while($data = mysqli_fetch_array($hasil)){
                echo"<tr>";
                echo"<td align='center'>".$i."</td><td align='center'>".$data['nim']."</td>";
                echo"<td>".$data['nama']."</td>";
                echo"<td><input type='hidden' name='nim".$i."' value='".$data['nim']."'/>
                <input type ='text' size='3'
                name ='grade".$i."' value='".$data['grade']."'/></td>";
                echo"</tr>";
                $i++;
            }
            $jumMhs = $i-1;
        ?>
            <input type="hidden" name="n" value="<?php echo $jumMhs ?>"/>
            <input type="hidden" name="kodemtk" value="<?php echo $kodeMK; ?>"/>
            <tr><td colspan='4' align='center'>
            <button class="btn-nilai" type="submit" value="Update">Update</button>
                </td>
                    </tr>

        </table>
    </form>
</body>
</html>