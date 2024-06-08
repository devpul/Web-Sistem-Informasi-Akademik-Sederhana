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

    
    
    <style>
        body{
            background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
        }
    </style>
</head>



<body>

    <!-- Kembali Start  -->
    <a class="home" href="index.php" >🏠 Kembali</a>
    <!-- Kembali End  -->

    <h1>Data MataKuliah</h1>

    

    <!-- Search Bar Start -->
    <form  action='proses_search_matkul.php' method='post'>
        <div>
        <a class='tambah' href="print_matakuliah.php">Print 🖨</a>
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
                $sqlstr = "SELECT * FROM matakuliah ORDER BY semester";
                $hasil = mysqli_query($link, $sqlstr);
                $no = 1;

                // READ
                if($hasil){
                    echo"<thead>
                    <th>No</th>
                    <th>Nama Matkul</th>
                    <th>Kode Matkul</th>
                    <th>SKS</th>  
                    <th>Semester</th>  
                    <th class='opsi' >Opsi</th> 
                </thead>";
            
                }

                while($data = mysqli_fetch_assoc($hasil)){
                    $namaMk = $data['namamtk'];
                    $kodeMk = $data['kodemtk'];
                    $sks = $data['sks'];
                    $sem = $data['semester'];

                if($hasil){
                        echo "<tbody>
                        <tr>
                                <td>$no</td>
                                <td>$namaMk</td>
                                <td>$kodeMk</td>
                                <td>$sks</td>
                                <td>$sem</td>
                                <td>
                                    <a  href= 'proses_update_matkul.php?update_matkul=$kodeMk'>Edit</a>
                                    <a  href= 'proses_delete_matkul.php?delete_matkul=$kodeMk'>Delete</a>
                                </td>
                        </tr>
                        </tbody>";
                    $no++;
                }
            }

            ?>
        </table>
    </form>

        
    </body>
</html>