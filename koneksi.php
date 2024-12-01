<?php 

$host = "localhost";
$username = "root";
$password ="";
$database ="db_sis";
 
$koneksi = new mysqli($host, $username, $password, $database);
if($koneksi)
{
	echo "";
}
else{
	echo "koneksi gagal.";
}
?> 