

<?php
    include "koneksi.php";

    $kodemtk = $_GET['update_matkul'];
    $sqlstr = "SELECT * FROM matakuliah WHERE kodemtk = '$kodemtk' ";
    $hasil1 = mysqli_query($link, $sqlstr);
    $ambil = mysqli_fetch_assoc($hasil1);
          $kodemtk = $ambil['kodemtk'];
          $namamtk = $ambil['namamtk'];
          $sks = $ambil['sks'];
          $semester = $ambil['semester'];


    if(isset($_POST['submit'])){
        $kodemtk = $_POST['kode'];
        $namamtk = $_POST['matkul'];
        $sks = $_POST['sks'];
        $semester = $_POST['semester'];

        $sqlstr1 = "UPDATE matakuliah SET kodemtk = '$kodemtk' , 
                    namamtk = '$namamtk' , 
                    sks = '$sks' , 
                    semester = '$semester'
                    WHERE kodemtk = '$kodemtk'";
        $hasil2 = mysqli_query($link, $sqlstr1);

        if($hasil2){
          echo 
          "<script>
              alert('Data Berhasil diperbarui!');
              window.location.href='tampil_matkul.php';
          </script>";
          
        }else{
          echo "gagal memperbarui";
        }

        mysqli_close($link);
        

    }

?>



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD</title>

        <link rel="stylesheet" href="stylecreate.css"/>


        <!-- Feather icons (home) -->
        <script src="https://unpkg.com/feather-icons"></script>
       <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      
  </head>


    <body>
    <form method="post">
      <table>
      <h2>Update Mata Kuliah<i class="user" data-feather="book"></i></h2>
        <tr>
            <td>Kode Mata Kuliah: </td>
            <td><input type='text' size='35' name="kode" maxlength="7" placeholder="Masukan Kode Matakuliah" value="<?php echo"$kodemtk" ?>" ></td>
        </tr>

        <tr>
            <td>Nama Mata Kuliah: </td>
            <td><input type='text' size='35' name='matkul' placeholder="Masukan Nama Matakuliah" value="<?="$namamtk" ?>" ></td>
        </tr>
        <tr>
            <td>SKS : </td>
            <td><input type='int' name='sks' size='35' maxlength="1" name='matkul' placeholder="Masukan SKS" value="<?php echo"$sks" ?>" ></td>
        </tr>
        <tr>
            <td>Semester : </td>
            <td><input type='int' name='semester' size='35' maxlength="3" name='matkul' placeholder="Masukan Semester" value="<?php echo"$semester" ?>" ></td>
        </tr>

        <tr>
           <td class="td"></td>
          <td class="td"><button type="submit" name="submit" >Submit </button></td>
        </tr>
    
      </table>
      <hr style="border:1px solid black;"/>
      <center><i>copyright @ibnubachdar</i></center>
    </form>

   
  </body>
</html>