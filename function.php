<?php
//koneksi ke database
$link = mysqli_connect("LAPTOP-1K27DRU5", "root", "", "tugas");


$result = mysqli_query($link, "select * from user");

$pass = mysqli_fetch_array($result);
var_dump($pass);

?>