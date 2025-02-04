<?php 

session_start(); 

include("config.php"); 

$email = $_POST['email']; 

$password = $_POST['password']; 

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'"; 

$result = $conn->query($sql); 

if ($result->num_rows > 0) { 

 $_SESSION['email'] = $email; 

 header("Location: welcome.php"); 

} else { 

 echo "Login gagal. <a href='index.php'>Coba lagi</a>"; 

} 

$conn->close(); 

?>