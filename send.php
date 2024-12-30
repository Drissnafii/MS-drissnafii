<?php

require __DIR__ . '/config/Connection.php';

// function sendTodb() {
//     to add into the clasee......

// }

if (isset($_POST["submit"])) {
    # code...
    $firstname = $_POST["firstname"] ;
    $lastname = $_POST["lastname"] ;
    $email = $_POST["email"] ;
    $pass = $_POST["pass"] ;
    

$sql = "INSERT INTO contact (firstname, lastname, email, pass) 
        VALUES (:firstname, :lastname, :email, :pass)";
$stmt= $pdo->prepare($sql);
$stmt->execute([
    ':firstname'=>$firstname,
    ':lastname'=>$lastname,
    ':email'=>$email,
    ':pass'=>$pass,
]); 

echo "<div> Sended succesfully into db </div>";
header('location: index.php');                          
} 

?>