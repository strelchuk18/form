<?php
$id = $_GET['id'];
var_dump($id);
$dbname = "resource";
$conn = mysqli_connect("localhost", "root", "rootroot", $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "DELETE FROM `users` WHERE id={$_GET['id']} LIMIT 1"); 

if (mysqli_query($conn, $result)) {
    mysqli_close($conn);
    echo "Данные успешно сохранены!";
} else {
    echo "Error deleting record";
}
header('Location: list.php'); 
   exit;
?>