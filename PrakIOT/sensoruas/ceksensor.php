<?php
// koneksi DB

$koneksi = mysqli_connect("localhost", "root", "", "uassensor");

// read data
$sql = mysqli_query($koneksi, "select * from sensor");
$data = mysqli_fetch_array($sql);
$nilai = $data["nilai_sensor"];

echo $nilai;
