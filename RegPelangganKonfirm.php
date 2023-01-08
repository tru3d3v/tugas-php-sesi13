<?php

require  'conn.php';

$stmt = $conn->prepare("INSERT INTO customer(nama, email, password, nama_toko, alamat_toko, kota, telpon) VALUES(?, ?, ?, ?, ?, ?, ?);
");
$stmt->bind_param("sssssss", $nama, $email, $password, $nama_toko, $alamat_toko, $kota, $telpon);


$nama=@$_POST['nama'];
$email=@$_POST['email'];
$password=@$_POST['password']; 
$nama_toko=@$_POST['nama_toko']; 
$alamat_toko=@$_POST['alamat_toko']; 
$kota=@$_POST['kota']; 
$telpon=@$_POST['telepon'];
$stmt->execute();


echo "Data berhasil disimpan kedalam database";

$stmt->close();
mysqli_close($conn);

?>
