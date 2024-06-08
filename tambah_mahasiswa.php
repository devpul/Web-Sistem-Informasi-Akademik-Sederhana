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
    
            

    <form action="proses_tambah_mahasiswa.php" method="post">
      <table>
      
      

      <h2>Tambah Data Mahasiswa<i class="user" data-feather="user"></i></h2>
        <tr>
          <th >NIM : </th>
          <td><input  type="text" size="35" maxlength="10" name="nim" placeholder="Masukan NIM" required /></td>
        </tr>

        <tr>
          <th class="nama">Nama Lengkap : </th>
          <td><input  type="text" size="35" name="nama" placeholder="Masukan Nama Lengkap" required /></td>
        </tr>

        <tr>
          <th class='jk'>Jenis Kelamin : </th>
          <td>
          <input  type="radio" name="jk" value="L" required />
          <label for="L">Laki-laki</label>
          
          <input class='p' type="radio" name="jk" value="P" required />
          <label for="P">Perempuan</label>
        </td>
        </tr>

        <tr>
          <th>Alamat : </th>
          <td><input type="text" size="35" name="alamat" placeholder="Masukan Alamat" required /></td>
        </tr>

        <tr>
          <th>Telepon :</th>
          <td><input type="tel" size="35" name="telepon" maxlength="12"  pattern="[0-9]{4}[0-9]{4}[0-9]{4}" placeholder="Masukan No Telepon" required /></td>
        </tr>

        <tr>
          <th>Kota : </th>
          <td><input type="text" size="35"name="kota" placeholder="Masukan Nama Kota" required /></td>
        </tr>

        <tr>
          <th>Kode Pos :  </th>
          <td><input type="text" size="35" maxlength="5" name="kodepos" placeholder="Masukan Kode Pos" required /></td>
        </tr>

        <tr>
          <th>Hoby </th>
          <td><input type="text" size="35"  name="hoby" placeholder="Masukan Hoby" required /></td>
        </tr>

        <tr>
          <th>Email </th>
          <td><input type="email" size='35' name="email" placeholder="Masukan email" required/></td>
        </tr>
        <tr>

        <tr>
          <th>Foto </th>
          <td><input class="foto" type="file" name="foto" required/></td>
        </tr>

        <tr>
           <td class="td"></td>
          <td class="td"><button type="submit" name="submit" >Submit </button></td>
        </tr>
    
      </table>
      <hr style="border:1px solid black;"/>
      <center><i>copyright @ibnubachdar</i></center>
    </form>

    <script>
      feather.replace();
    </script> 
  </body>
</html>