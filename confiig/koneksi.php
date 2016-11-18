<?php

// Author Desfah Iriadi

$server     = "localhost" ;
$user       = "root";
$password   = "";
$database   = "leason";

$koneksi = mysqli_connect($server, $user,$password,$database);

if ($koneksi){
    
    echo "dijumpai";
}
else {
    echo "tidak dijumpai";
}
