<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Matakuliah</title>
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
                
                $sqlstr = "SELECT * FROM matakuliah 
                        WHERE kodemtk LIKE '%$keyword%' OR 
                                namamtk LIKE '%$keyword%' OR
                                sks     LIKE '%$keyword%' OR
                                semester LIKE '%$keyword%'";

                $sqlstr_tampil = "SELECT * FROM matakuliah";

                $cari = mysqli_query($link, $sqlstr);
                $no = 1;

                    if($jumlah = mysqli_num_rows($cari)>0){

                        echo " <tr>
                                        <th>No</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Nama Matakuliah</th>
                                        <th>Sks</th>
                                        <th>Semester</th>
                                        <th>Opsi</th>
                                </tr> ";
                        

                        while($data = mysqli_fetch_assoc($cari)){
                            
                            echo "<tr>
                                        <td>$no</td>
                                        <td>$data[kodemtk]</td>
                                        <td>$data[namamtk]</td>
                                        <td>$data[sks]</td>
                                        <td>$data[semester]</td>
                                        <td>
                                            <a  href= 'proses_update_matkul.php?update_matkul=$data[kodemtk]'>Edit</a>
                                            <a  href= 'proses_delete_matkul.php?delete_matkul=$data[kodemtk]'>Delete</a>
                                        </td>
                                </tr>
                        
                            ";
                            $no++;
                            
                        }
                    }else{
                        echo 
                        "<script>
                            alert('Kata Kunci Tidak Sesuai');
                            document.location.href = 'tampil_matkul.php';
                        </script>";
                    }
                }

               
            
        ?>
    </table>
</body>
</html>
