<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$id=$_POST['id'];
$connection = mysqli_connect('localhost', 'root', 'rootroot');
if($connection == false)
{
    exit();
}

$db=mysqli_select_db($connection, "resource");
mysqli_set_charset("utf8");
if (!$connection || !$db)
{
exit(mysqli_error());
}
$fn = $_POST['first_name']; 
$ln = $_POST['last_name'];
$email = $_POST['email'];

$result = mysqli_query($connection, "UPDATE `users` SET `first_name` = '$fn',`last_name` = '$ln',`email` = '$email' WHERE `users`.`id` = '$id'");
if ($result) {
    echo "Введите данные:";
}
else {
    echo "Произошла ошибка, пожалуйста повторите попытку.";
} 
  
?>
<form action='edit.php' method="post">
          <input type="hidden" name="id" value=""/>
          <input type="text" name="first_name" value=""/>
          <input type="text" name="last_name" value=""/>
          <input type="text" name="email" value=""/>
          <input type="submit" value="edit"/>
        </form>
</body>
</html>