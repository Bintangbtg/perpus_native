<?php
$conn=mysqli_connect('localhost','root','','perpus_php_native');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//cara lain membuat koneksi php dengan database
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "perpus_php_native";

// $koneksi=mysqli_connect($hostname,$username,$password,$database);
// if($koneksi){
//     echo "koneksi berhasil";
// }
// else{
//     die("koneksi gagal").mysqli_connect_error();
// }
?>