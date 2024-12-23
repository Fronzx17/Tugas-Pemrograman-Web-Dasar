<!-- Nama: Fadjar Buwana -->
 <!-- NIM: 241351130 -->
  <!-- Jurusan: Teknik Informatika / Pagi A -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemmen Mahasiswa</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        hr {
            border: 1px solid #35A9DB;
            margin: 20px 0;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #35A9DB;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #2a8bbd;
        }

        .table1 {
            font-family: sans-serif;
            color: #444;
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #f2f5f7;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        .table1 th {
            background: #35A9DB;
            color: #fff;
            font-weight: normal;
            padding: 12px;
        }

        .table1, th, td {
            padding: 10px 15px;
            text-align: left;
        }

        .table1 tr:hover {
            background-color: #f5f5f5;
        }

        .table1 tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table1 td a {
            color: #35A9DB;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #35A9DB;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .table1 td a:hover {
            background-color: #35A9DB;
            color: #fff;
        }

        .options {
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>
<body style="font-family:arial">
    <center><h2>Aplikasi Manajemen Mahasiswa <br>STT Wastukancana</h2></center>
    <hr />
    <a href="tambah.php">+ Tambah Data Baru</a><br /><br />
    <b>Data Mahasiswa</b>
    <table style="width:100%" class="table1">
    <tr>
    <th>No</th>
    <th>ID</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Jurusan</th>
    <th>Email</th>
    <th colspan=2><center>Opsi</center></th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $data = mysqli_query($koneksi,"select * from mahasiswa");
    while($r = mysqli_fetch_array($data)){
    $id = $r['id'];
    $nama = $r['nama'];
    $nim = $r['nim'];
    $jurusan = $r['jurusan'];
    $email = $r['email'];
    ?>
    <tr><td><?php echo $no++; ?></td>
    <td><?php echo $id; ?></td>
    <td><?php echo $nama; ?></td>
    <td><?php echo $nim; ?></td>
    <td><?php echo $jurusan; ?></td>
    <td><?php echo $email; ?></td>
    <td align=right width=70px><a href="edit.php?id=<?php echo
    $id;?>">Edit</a></td>
    <td align=right width=70px><a href="hapus.php?id=<?php echo
    $id;?>">Hapus</a></td>
    </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>
