<?php
    include "koneksi.php";

    session_start();

    $nim = $_GET['deletenim'];
    if(isset($_GET['deletenim'])){
        $sqlstr = "DELETE FROM mahasiswa WHERE nim = '$nim'";
        $hasil = mysqli_query($link, $sqlstr);

        if($hasil){
            echo "<script>
                    window.location.href='tampil_mahasiswa.php';
                    alert('Data berhasil dihapus!');
                   </script>";
                }

                
        }

    session_destroy();

?>