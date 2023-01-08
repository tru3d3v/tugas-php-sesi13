<?php

require  'conn.php';

$stmt = $conn->prepare("SELECT id,nama,email FROM customer WHERE email=? AND password=?");
$stmt->bind_param("ss", $email, $password);


$email=@$_POST['email'];
$password=@$_POST['password']; 

$stmt->execute();
$result = $stmt->get_result(); // get the mysqli result

$id = '';
$nama='';
$email ='';
while ($row = $result->fetch_assoc()) {
    $id =  $row['id'];
    $nama =  $row['nama'];
    $email =  $row['email'];
}

if($id==''){
    echo "Login tidak berhasil";
}else{

    session_start();
    $_SESSION["nama"] = $nama;
    $_SESSION["email"] = $email;

    echo "Login berhasil & Session sudah dibuat <br>";
    echo "Sesion nama:".$_SESSION["nama"]." email:".$_SESSION["email"];

}

$stmt->close();
mysqli_close($conn);

?>
