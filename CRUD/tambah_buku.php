<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Produk</title>
    <style type="text/css">
      * {
        font-family: "Arial";
      }
      h1 {
        text-transform: uppercase;
        color: #297164;
      }
    button {
          background-color: white;
          color: red;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: #297164;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #297164;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Buku</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Judul Buku</label>
          <input type="text" name="judul_buku" autofocus="" required="" />
        </div>
        <div>
          <label>Pengarang</label>
         <input type="text" name="pengarang" />
        </div>
        <div>
          <label>Penerbit</label>
         <input type="text" name="penerbit" required="" />
        </div>
        <div>
          <label>Gambar </label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit">Simpan Data Buku</button>
        </div>
        </section>
      </form>
  </body>
</html>