<?php
    $koneksi = mysqli_connect("localhost","root","");
    // isikan dengan nama database yang akan di hubungkan
    $database = mysqli_select_db($koneksi, "db_mahasiswa");
?>