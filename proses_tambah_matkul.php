<?php
    
    include "koneksi.php";

    session_start();

    if(isset($_POST['submit'])){

        $kodeMk = $_POST['kode'];
        $namaMk = $_POST['matkul'];
        $sks = $_POST['sks'];
        $semester = $_POST['semester'];

        $sqlstr1 = "SELECT * FROM matakuliah WHERE kodemtk = '$kodeMk'";
        $hasil1 = mysqli_query($link, $sqlstr1);

        if(mysqli_num_rows($hasil1)>0){
            echo "<script>
                        alert('Kode MatKul Sudah digunakan! , Tolong Ganti 😉 ');
                        window.location.href='index.php';
                  </script>";
        }else{
            // Jika KodeMk tidak lebih dari 0, Maka Insert

            $sqlstr2 = "INSERT INTO matakuliah (kodemtk, namamtk, sks, semester) 
                                    VALUES ('$kodeMk','$namaMk','$sks','$semester')";
            $hasil2 = mysqli_query($link, $sqlstr2);

            if($hasil2){
                $_SESSION['tambahkan'] = "<script>
                                            alert('Data Berhasil disimpan !');
                                            window.location.href='tampil_matkul.php';
                                        </script>";
                echo $_SESSION['tambahkan'];
            }

    }
}

    session_destroy();
?>