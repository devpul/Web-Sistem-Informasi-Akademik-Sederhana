<?php
    include "koneksi.php";

    session_start();

    if(isset($_POST['submit'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $kota = $_POST['kota'];
        $kodepos = $_POST['kodepos'];
        $hoby = $_POST['hoby'];
        $email = $_POST['email'];
        $foto = $_POST['foto'];

        // Cek apakah NIM sudah ada di database
        $cekNim = "SELECT * FROM mahasiswa WHERE nim='$nim'";
        $hasilCekNim = mysqli_query($link, $cekNim);

        if(mysqli_num_rows($hasilCekNim) > 0){
            // NIM sudah ada, tampilkan pesan kesalahan
            echo "<script>
                    window.location.href='tampil_mahasiswa.php';
                    alert('NIM sudah digunakan!');
                  </script>";
        } else {
            // NIM belum ada, lakukan insert
            $sqlstr = "INSERT INTO mahasiswa (nim, nama, jk, alamat, telepon, kota, kodepos, hoby, email, foto)
            VALUES ('$nim', '$nama', '$jk', '$alamat', '$telepon', '$kota', '$kodepos', '$hoby', '$email', '$foto')";
            $hasil = mysqli_query($link, $sqlstr);

            if($hasil){
                $_SESSION['tambahkan'] = "<script> alert('Data berhasil ditambahkan');
                                            window.location.href='tampil_mahasiswa.php';
                                            </script>";
                echo $_SESSION['tambahkan'];

            } else {
                echo "<script>
                        alert('Terjadi kesalahan saat menyimpan data!');
                      </script>";
                echo "<a href='index.php'>Kembali</a>";
            }
        }
    }
?>


