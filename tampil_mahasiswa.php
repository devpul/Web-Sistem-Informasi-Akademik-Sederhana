<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <!-- Feather icons (home) -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Kembali Start  -->
    <a class="home" href="index.php" >🏠 Kembali</a>
    <!-- Kembali End  -->

    <h1>Data Mahasiswa</h1>

    <!-- Search Bar Start -->
    <form  action='proses_search.php' method='post'>
        <!-- Tambah Mahasiswa Start -->
    
    <!-- Tambah Mhasiswa End -->
        <div>
            
            
            <a class='tambah' href="print_mahasiswa.php">Print 🖨</a>
            
            <input class='bar' type = 'text' name='keyword' autocomplete="off">  
            <input class='button' type = 'submit' name='submit' value="🔍" >
        </div>
    </form>
    <!-- Search Bar End -->

    <form>
        <table border='1'>
            <?php
                include "koneksi.php";

                // READ
                $sqlstr = "SELECT * FROM mahasiswa";
                $hasil = mysqli_query($link, $sqlstr);

                // READ
                if($hasil){
                    echo "<thead>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Telepon</th>   
                    <th>Kota</th>   
                    <th>Kodepos</th>   
                    <th>Hoby</th>   
                    <th>Email</th>   
                    <th>Foto</th>  
                    <th>Opsi</th> 
                </thead>";
            
                }

                while($data = mysqli_fetch_assoc($hasil)){
                    $nim= $data ['nim'];
                    $nama= $data['nama'];
                    $jk=$data['jk'];
                    $alamat=$data['alamat'];
                    $telepon =  $data['telepon'];
                    $kota =  $data['kota'];
                    $kodepos=$data['kodepos'];  
                    $hoby  = $data['hoby'];
                    $email=  $data['email']; 
                    $foto =$data['foto'];

                    if($hasil){
                        echo "<tbody>
                                    <tr>
                                        <td>$nim</td>
                                        <td>$nama</td>
                                        <td>$jk</td>
                                        <td>$alamat</td>
                                        <td>$telepon</td>   
                                        <td>$kota</td>   
                                        <td>$kodepos</td>   
                                        <td>$hoby</td>   
                                        <td>$email</td>   
                                        <td><img class='fotoimg' src='assets/$foto'></td>

                                        <td>
                                        <a class='update' href='proses_update.php?updatenim=$nim'> Update </a>
                                        <a class='delete' href='proses_delete.php?deletenim=$nim' onclick = return confirm('Yakin Data Akan Dihapus');> Delete </a>
                                        
                                        </td>
                                    </tr>
                                </tbody>";
                    }
                }

            ?>
            </table>
        </form>
</body>
</html>