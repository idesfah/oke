<?php

// Author Desfah Iriadi

$server = "localhost" ;
$user = "root";
$password = "";
$database = "leason";

$koneksi = mysqli_connect($server, $user,$password,$database);

if ($koneksi){
    
    echo "ditemukan";
}
else {
    echo "tidak ditemukan";
}
