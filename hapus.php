<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id=$id");
    header("Location:index.php");
?>