<?php 
// $conn = mysqli_connect('localhost','root','','absen');
$conn = new mysqli('localhost', 'root','', 'absen');
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>