<?php

$host="localhost";
$user="root";
$pass="";
$database="ukk_spp1";

$koneksi=mysqli_connect($host, $user, $pass, $database);
if ($koneksi){
    $buka=mysqli_select_db($koneksi , $database);
    echo "terhubung";
    if (!$buka){
        echo "Database tidak dapat terhubung";
    }
}else{
    echo "MySQL tidak Terhubung";
}

?>