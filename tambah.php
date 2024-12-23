<html>
<head>
    <title>Aplikasi Manajemen Mahasiswa Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 20px;
        }

        header {
            text-align: center;
            background-color: #007BFF;
            color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h2 {
            margin: 0;
            font-size: 28px;
        }

        hr {
            border: 1px solid #007BFF;
            margin: 20px 0;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-top: 10px;
        }

        td {
            padding: 10px;
            vertical-align: middle;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #007BFF;
            outline: none;
        }

        input[type="submit"] {
            background-color:rgb(0, 150, 230);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color:rgb(33, 74, 136);
        }

        .message {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body style="font-family:arial">
    <center><h2>Aplikasi Manajemen Mahasiswa <br>STT Wastukancana</h2></center>
    <hr />
    <b>Tambah Data Baru</b>
    <br/><br/>
    <form action="tambah.php" method="post" name="form1">
    <table width="100%" border="0">
    <tr>
    <td>Nama</td>
    <td><input type="text" name="nama" size="50" required></td>
    </tr>
    <tr>
    <td>NIM</td>
    <td><input type="text" name="nim" size="50" required></td>
    </tr>
    <tr>
    <td>Jurusan</td>
    <td><input type="text" name="jurusan" size="50" required></td>
    </tr>
    <tr>
    <td>Email</td>
    <td><input type="text" name="email" size="50" required></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="Submit" value="+ Tambahkan"></td>
    </tr>
    </table>
    </form>
    <?php
    if(isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    include "koneksi.php";
    $tambah_mahasiswa = "insert into mahasiswa
    values('','$nama','$nim','$jurusan','$email')";
    $kerjakan=mysqli_query($koneksi, $tambah_mahasiswa);
    if($kerjakan)
    {
    echo "Mahasiswa berhasil ditambahkan. <a href='index.php'>Lihat Data Mahasiswa</a>";
    }
    else
    {
    echo "Gagal bro, coba input yang bener";
    }
    }
    ?>
    </body>
</html>