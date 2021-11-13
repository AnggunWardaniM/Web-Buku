<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Buku Anggun</title>
    <style type="text/css">
      * {
        font-family: "Georgia";
      }
      h1 {
        text-transform: uppercase;
        color: #4D7DA0;
      }
    table {
      border: solid 1px #AE8E76;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #4242AE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #4242AE;
        color: #624937;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: #433653;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body>
    <center><h1>Data Buku Anggun</h1><center>
    <a style=color:red;background-color:#373754; href="tambah_buku.php">+ &nbsp; Tambah Buku</a>
    <a href="login.php" class="btn-btn-success"> &nbsp;Login </a>
            <br>

    <br/>
    <table>
      <thead>
        <tr>
          <th style=color:white;background-color:#373754;>No</th>
          <th style=color:gray;background-color:#455B6B;>Judul Buku</th>
          <th style=color:gray;background-color:#455B6B;>Pengarang</th>
          <th style=color:gray;background-color:#455B6B;>Penerbit</th>
          <th style=color:gray;background-color:#455B6B;>Gambar</th>
          <th style=color:gray;background-color:#455B6B;>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM buku ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['judul_buku']; ?></td>
          <td><?php echo substr($row['pengarang'], 0, 30); ?></td>
          <td><?php echo substr($row['penerbit'], 0, 30); ?></td>
          <td style="text-align: center;"><img src="../gambar<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
          <td>
              <a href="edit_buku.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>