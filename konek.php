<?php 

$host = "localhost";
$username = "root";
$password ="";
$database ="ppdb";
 
$koneksi = new mysqli($host, $username, $password, $database);
if($koneksi)
{
	echo "";
}
else{
	echo "koneksi gagal.";
}
?> 