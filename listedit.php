<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
    $conn = mysqli_connect('localhost', 'root', 'rootroot');
    if($conn == false) {
      exit();
    }

    $db = mysqli_select_db($conn, "resource");
      mysqli_set_charset("utf8");
    if (!$conn || !$db) {
      exit(mysqli_error());
    }

    $result = mysqli_query($conn, "SELECT * FROM users WHERE id={$_GET['id']} LIMIT 1");

    echo '<table border = "1"><thead><tr>'; 
    while ($row = mysqli_fetch_array($result)) {
      echo '<tbody><tr>';
  ?>
    <td>
      <form action='edit.php' method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
        <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"/>
        <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"/>
        <input type="text" name="email" value="<?php echo $row['email']; ?>"/>
        <input type="submit" value="SAVE"/>
      </form>
    </td>
  <?php
    }
    echo '</tr></tbody>
    </table>';
  ?>
</body>
</html>