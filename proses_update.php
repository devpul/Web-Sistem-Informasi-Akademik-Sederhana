<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylecreate.css" />
  
    
  </head>
<body>
    


<?php
    include "koneksi.php";

      



    if(isset($_POST['submit'])){

          $nim = $_POST['nim'];
          $nama =  $_POST['nama'];
          $jk = $_POST['jk'];
          $alamat =$_POST['alamat'];
          $telepon = $_POST['telepon'];
          $kota =$_POST['kota'];
          $kodepos =$_POST['kodepos'];
          $hoby =$_POST['hoby'];
          $email = $_POST['email'];
          $foto =$_POST["foto"];


          $sqlstr1 = "UPDATE mahasiswa SET nim = '$nim' 
          , nama = '$nama' 
          , jk = '$jk' 
          , alamat = '$alamat' 
          , telepon = '$telepon' 
          , kota = '$kota'
          , kodepos = '$kodepos'
          , hoby = '$hoby'
          , email = '$email'
          , foto = '$foto' WHERE nim='$nim'";

          $hasil11 = mysqli_query($link, $sqlstr1);
          
          if($hasil11){

              
              header("Location: tampil_mahasiswa.php");
              echo "<script>alert('Data berhasil Diperbarui'); </>";

          }else{
            echo "gagal";
          }
          
      }

      $nim = $_GET['updatenim'];
      $sqlstr= "SELECT * FROM mahasiswa WHERE nim='$nim'";
      $hasil = mysqli_query($link,$sqlstr);
      if (mysqli_num_rows($hasil) == 1) {
        $row = mysqli_fetch_assoc($hasil);
      }
    
?>

<form method="post">
      <table>
      <h2>Update Data Mahasiswa 👨‍🎓<i class="user" data-feather="user"></i></h2>

        <tr>
          <th >NIM : </th>
          <td><input  type="text" size="35" maxlength='10' name="nim" placeholder="Masukan NIM" required value="<?php echo $row['nim']; ?>" /></td>
        </tr>

        <tr>
          <th class="nama">Nama Lengkap : </th>
          <td><input  type="text" size="35" name="nama" placeholder="Masukan Nama Lengkap" required value="<?php echo $row['nama']; ?>" /></td>
        </tr>

        <tr>
          <th class='jk'>Jenis Kelamin : </th>
          <td>
          <input  type="radio" name="jk" value="L <?php if($row['jk'] == 'L') echo 'selected'; ?>" required />
          <label for="L">Laki-laki</label>
          
          <input class='p' type="radio" name="jk"  value="P <?php if($row['jk'] == 'P') echo 'selected'; ?>"  required />
          <label for="P">Perempuan</label>
        </td>
        </tr>

        <tr>
          <th>Alamat : </th>
          <td><input type="text" size="35" name="alamat" placeholder="Masukan Alamat" required  value="<?php echo $row['alamat']; ?>" /></td>
        </tr>

        <tr>
          <th>Telepon :</th>
          <td><input type="tel" size="35" name="telepon" maxlength="12"  pattern="[0-9]{4}[0-9]{4}[0-9]{4}" placeholder="Masukan No Telepon" required value="<?php echo $row['telepon']; ?>" /></td>
        </tr>

        <tr>
          <th>Kota : </th>
          <td><input type="text" size="35"name="kota" value="<?php echo $row['kota']; ?>" placeholder="Masukan Nama Kota" required /></td>
        </tr>

        <tr>
          <th>Kode Pos :  </th>
          <td><input type="text" size="35" maxlength="5" name="kodepos" placeholder="Masukan Kode Pos" required value="<?php echo $row['kodepos']; ?>" /></td>
        </tr>

        <tr>
          <th>Hoby </th>
          <td><input type="text" value="<?php echo $row['hoby']; ?>" size="35"  name="hoby" placeholder="Masukan Hoby" required  /></td>
        </tr>

        <tr>
          <th>Email </th>
          <td><input type="email" size='35' name="email" placeholder="Masukan email" required value="<?php echo $row['email']; ?>" /></td>
        </tr>
        <tr>

        <tr>
          <th>Foto</th>
          <td>
            <img src="assets/<?php echo $row['foto']; ?>" width="100" height="150">
            <input class="foto" type="img" name="foto" required value="<?php echo $row['foto']; ?>" />
          </td>
        </tr>

        <tr>
          <th>Ganti Foto</th>
          <td>
            <input class="foto" type="file" name="foto" required value=<?php echo $row['foto']; ?> />
          </td>
        </tr>
        

        <tr>
            <td></td>
          <td><button type="submit" name="submit" value="submit" >Submit </button></td>
        </tr>
    
      </table>
      <hr style="border:1px solid black"/>
      <center><i>copyright @ibnubachdar</i></center>
    </form>

</body>
</html>
  
<?php
    

?>



    