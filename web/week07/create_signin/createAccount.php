<?php
//echo "alert('err 1')";
$name = $_POST['txtName'];
$username = $_POST['txtUser'];
$password = $_POST['txtPassword'];

//echo "alert('err 2')";
if (!isset($username) || $username == ""
	|| !isset($password) || $password == ""
	|| !isset($name) || $name == "")
{
	header("Location: signUp.php");
	die();
}

//echo "alert('err 3')";
$username = htmlspecialchars($username);
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

////echo "alert('err 4')";
require("../dbconnect.php");
$db = get_db();
$query = 'INSERT INTO login(username, password, name) VALUES(:username, :password, :name)';
$statement = $db->prepare($query);
$statement->bindValue(':name', $name);
$statement->bindValue(':username', $username);

//echo "alert('err 5')";
$statement->bindValue(':password', $hashedPassword);
echo "alert('err 6')";
$statement->execute();

//echo "alert('err 7')";
header("Location: signIn.php");
die(); 

?>