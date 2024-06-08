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
</head>
<body>

    <!-- Kembali Start  -->
    <a class="home" href="tampil_mahasiswa.php" >🏠 Kembali</a>
    <!-- Kembali End  -->

    <h1>Data Mahasiswa</h1>



    <table id="mahasiswaTable" class="display" style="width:100%" border="1">
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
                <th hidden>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "koneksi.php";

                // READ
                $sqlstr = "SELECT * FROM mahasiswa";
                $hasil = mysqli_query($link, $sqlstr);

                while($data = mysqli_fetch_assoc($hasil)){
                    $nim= $data['nim'];
                    $nama= $data['nama'];
                    $jk=$data['jk'];
                    $alamat=$data['alamat'];
                    $telepon = $data['telepon'];
                    $kota = $data['kota'];
                    $kodepos=$data['kodepos'];
                    $hoby  = $data['hoby'];
                    $email= $data['email'];
                    $foto =$data['foto'];

                    echo "<tr>
                        <td>$nim</td>
                        <td>$nama</td>
                        <td>$jk</td>
                        <td>$alamat</td>
                        <td>$telepon</td>
                        <td>$kota</td>
                        <td>$kodepos</td>
                        <td>$hoby</td>
                        <td>$email</td>
                        <td><img class='fotoimg' src='assets/$foto' alt='Foto'></td>
                        <td hidden>
                            <a class='update' href='proses_update.php?updatenim=$nim'>Update</a>
                            <a class='delete' href='proses_delete.php?deletenim=$nim' onClick='return confirm(\"Yakin Hapus?\");'>Delete</a>
                        </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>


    

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
            $('#mahasiswaTable').DataTable({
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
