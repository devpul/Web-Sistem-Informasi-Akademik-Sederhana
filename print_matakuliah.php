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
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    
    <style>
        body{
            background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );
        }
    </style>

</head>



<body>

    <!-- Kembali Start  -->
    <a class="home" href="tampil_matkul.php" >🏠 Kembali</a>
    <!-- Kembali End  -->

    <h1>Data MataKuliah</h1>
        <table border='1' class="display" id="matakuliahTable">
        
                    <thead>
                        <th hidden>No</th>
                        <th>Nama Matkul</th>
                        <th>Kode Matkul</th>
                        <th>SKS</th>  
                        <th>Semester</th>  
                        <th hidden class='opsi' >Opsi</th> 
                    </thead>
                

                <tbody>
                <?php
                include "koneksi.php";
                // READ
                $sqlstr = "SELECT * FROM matakuliah";
                $hasil = mysqli_query($link, $sqlstr);
                $no = 1;

                //Ambil
                while($data = mysqli_fetch_assoc($hasil)){
                    $namaMk = $data['namamtk'];
                    $kodeMk = $data['kodemtk'];
                    $sks = $data['sks'];
                    $sem = $data['semester'];

                        echo "
                                    <tr>
                                        <td hidden>$no</td>
                                        <td>$namaMk</td>
                                        <td>$kodeMk</td>
                                        <td>$sks</td>
                                        <td>$sem</td>
                                        <td hidden>
                                            <a  href= proses_update_matkul.php?update_matkul=$kodeMk>Edit</a>
                                            <a  href= deleteMk.php?delete_matkul=$kodeMk>Delete</a>
                                        </td>
                                     </tr>
                              ";
                    $no++;
                }
            

            ?>
        </table>
        </tbody>
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#matakuliahTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
        feather.replace();
    </script>

        
    </body>
</html>