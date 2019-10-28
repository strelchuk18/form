<?php
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

 echo ($fn) . "<br />"; 
 echo ($ln) . "<br />";
echo ($email) . "<br />";

$result = mysqli_query($connection, "INSERT INTO `users`(`first_name`, `last_name`, `email` ) VALUES ('$fn','$ln', '$email')");
if ($result) {
    echo "Данные успешно сохранены!";
}
else {
    echo "Произошла ошибка, пожалуйста повторите попытку.";
} 
?>
<?php
header("Location: http://new.loc/"); /* Перенаправление браузера */

/* Убедиться, что код ниже не выполнится после перенаправления .*/
exit;
?> 