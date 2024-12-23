<?php
include "koneksi.php";
if(isset($_POST['update']))
{
 $id = $_POST['id'];
 $nama=$_POST['nama'];
 $nim=$_POST['nim'];
 $jurusan=$_POST['jurusan'];
 $email=$_POST['email'];
 $result = mysqli_query($koneksi, "UPDATE mahasiswa SET
nama='$nama',nim='$nim',jurusan='$jurusan',email='$email' WHERE id=$id");
 header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id=$id");
while($r = mysqli_fetch_array($result))
{
 $nama = $r['nama'];
 $nim = $r['nim'];
 $jurusan = $r['jurusan'];
 $email = $r['email'];
}
?>
<html>
<head>
<title>Aplikasi Manajemen Mahasiswa</title>
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
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body style="font-family:arial">
<center><h2>Aplikasi Manajemmen Mahasiswa <br>STT Wastukancana</h2></center>
<hr />
<b>Edit Data Mahasiswa</b>
 <br/><br/>
 <form name="update_user" method="post" action="edit.php">
 <table border="0">
 <tr>
 <td>Nama</td>
 <td><input type="text" size="50" name="nama" value="<?php echo
$nama;?>"></td>
 </tr>
 <tr>
 <td>NIM</td>
 <td><input type="text" size="50" name="nim" value="<?php echo
$nim;?>"></td>
 </tr>
 <tr>
 <td>Jurusan</td>
 <td><input type="text" size="50" name="jurusan" value="<?php echo
$jurusan;?>"></td>
 </tr>
 <tr>
 <td>Email</td>
 <td><input type="text" size="50" name="email" value="<?php echo
$email;?>"></td>
 </tr>
 <tr>
 <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
 <td><input type="submit" name="update" value="Update"></td>
 </tr>
 </table>
 </form>
</body>
</html>