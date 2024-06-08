<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<h1>Hasil Pencarian: </h1>

<table border='1'>
<?php
    include "koneksi.php";

    if(isset($_POST['submit'])){
        $keyword = $_POST['keyword'];

        $sqlstr ="SELECT * FROM mahasiswa WHERE nim LIKE '%$keyword%' 
        OR nama LIKE '%$keyword%' 
        OR jk LIKE '%$keyword%' 
        OR alamat LIKE '%$keyword%' 
        OR telepon LIKE '%$keyword%' 
        OR kota LIKE '%$keyword%' 
        OR kodepos LIKE '%$keyword%' 
        OR hoby LIKE '%$keyword%' 
        OR email LIKE '%$keyword%' 
        OR foto LIKE '%$keyword%'";
        
        $sqlstr2 = "SELECT * FROM mahasiswa";

        $hasil = mysqli_query($link,$sqlstr);

            if(mysqli_num_rows($hasil)>0){
                echo "
                        <thead>
                            <tr>
                                <th>nim</th>
                                <th>nama</th>
                                <th>jenis kelamin</th>
                                <th>alamat</th>
                                <th>telepon</th>   
                                <th>kota</th>   
                                <th>kodepos</th>   
                                <th>hoby</th>   
                                <th>email</th>   
                                <th>foto</th>  
                                <th>Opsi</th>
                            </tr>
                        </thead>
                    ";
            while($data = mysqli_fetch_assoc($hasil)){
                echo "<tr>
                        <td>$data[nim]</td>
                        <td>$data[nama]</td>
                        <td>$data[jk]</td>
                        <td>$data[alamat]</td>
                        <td>$data[telepon]</td>   
                        <td>$data[kota]</td>   
                        <td>$data[kodepos]</td>   
                        <td>$data[hoby]</td>   
                        <td>$data[email]</td>   
                        <td><img class='fotoimg' src='assets/$data[foto]'></td> 
                        <td>
                            <a class='update' href='proses_update.php?updatenim=$data[nim]' > Update </a> 
                            <a class='delete' href='proses_delete.php?deletenim=$data[nim]' onclick = 'return confirm('Yakin Data Akan Dihapus');'> Delete </a>
                        </td>             
                    </tr>
                    ";
            }
                }else{
                    echo "<script> alert('Keyword tidak sesuai !, Mohon Coba Lagi 🙏'); document.location.href='tampil_mahasiswa.php'; 
                    </script>";
                }

            
        }
    
?>
</table>
</body>
</html>

