<html>
<head><title>Proses Kontrak Matakuliah</title></head>
<body>
    <?php   
        include "koneksi.php";

        $nim = $_POST['nim'];
        $jummk = $_POST['jummk'];
        for($i = 1; $i <= $jummk; $i++){
            $mtk=isset($_POST['mtk'.$i])?$_POST['mtk'.$i]:'';
            if(!empty($mtk)){
                $query = "INSERT INTO nilai VALUES('$nim','$mtk','-')";
                $update = mysqli_query($link,$query);
            }
        }
        if($update){
            header("Location: index.php");
            // echo "<script> 
            //             alert('Kontrak Matakuliah Berhasil!);
            //             window.location.href = 'tampil_matkul.php';
            //        </script> ";
        }
        else{
            echo "Kontrak Matakuliah Gagal!";
        }

    ?>
</body>
</html>