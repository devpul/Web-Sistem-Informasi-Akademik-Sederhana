<?php
    include "koneksi.php";

   
    $kodemtk = $_GET['delete_matkul'];
    if(isset($_GET['delete_matkul'])){

        $sqlstr = "DELETE FROM matakuliah WHERE kodemtk = '$kodemtk'";
        $hasil = mysqli_query($link, $sqlstr);

        if($hasil){
            echo"<script>
                    alert('Data Berhasil di Hapus !');
                    window.location.href='tampil_matkul.php';
                </script>";
        }


    }

    mysqli_close($link);


    
    

?>

