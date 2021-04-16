<?php
$login = filter_var(trim($_POST['login']),
					FILTER_SANITIZE_STRING);
 $name = filter_var(trim($_POST['name']),
					FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['pass']),
					FILTER_SANITIZE_STRING);


if(mb_strlen($login) <4 || mb_strlen($login) >10){
	echo "Invalid login length(From 4 to 10)";
	exit();
}
else if(mb_strlen($name) <2 || mb_strlen($name) >10){
	echo "Invalid name length(From 4 to 10)";
	exit();
}
 else if(mb_strlen($pass) <5 || mb_strlen($pass) >15){
	echo "Invalid password length(from 5 to 15)";
	exit();
 }
$pass = md5($pass."qwerty123456");

$servername = 'localhost';
$database = 'register';
$username = 'root';
$password = 'root';
// Устанавливаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO `users` (`login`,`pass`,`name`) VALUES ('$login', '$pass', '$name')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

header('Location:http://localhost/signIn.php');
?>