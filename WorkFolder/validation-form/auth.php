<?php
 $login = filter_var(trim($_POST['login']),
					FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']),
					FILTER_SANITIZE_STRING);

$pass = md5($pass."qwerty123456");

$servername = 'localhost';
$database = 'register';
$username = 'root';
$password = 'root';
// Устанавливаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение

$result = $conn->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

$user = $result->fetch_assoc();
if(count($user) == 0){
	echo "User doesn't exist";
	exit();
}

setcookie('user',$user['name'],time() +3600,"/");

mysqli_close($conn);

header('Location:http://localhost/indexSignUp.php');


?>