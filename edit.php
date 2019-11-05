<?php
$id=$_POST['id'];
$fn=$_POST['first_name'];
$ln=$_POST['last_name'];
$email=$_POST['email'];
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


$result = mysqli_query($connection, "UPDATE `users` SET `id` = '$id', `first_name` = '$fn',`last_name` = '$ln',`email` = '$email' WHERE `users`.`id` = '$id'");
if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo "Произошла ошибка, пожалуйста повторите попытку.";
} 
  header('Location: list.php'); 
  exit;

?>