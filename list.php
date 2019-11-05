<!DOCTYPE html>
<html>
<head>
  <title>FORM</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <div class="postcard">
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

      $result = mysqli_query($conn, "SELECT * FROM users ORDER BY `users`.`id` ASC");
      $all_property = array();

      echo '<table border = "1"><thead><tr>';
      echo '<th>' . "Action" . '</th>';
      while ($property = mysqli_fetch_field($result)) {
        echo '<th>' . $property->name . '</th>';
        array_push($all_property, $property->name);
      }    
      echo '</tr></thead>';

      while ($row = mysqli_fetch_array($result)) {
        echo '<tbody><tr>';?>
      <td>
        <form action='delete.php?id="<?php echo $row['id']; ?>"' methot="POST">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
          <input type="submit" value="delete"/>
        </form> 
        <form action='listedit.php?id="<?php echo $row['id']; ?>"' methot="POST">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
          
          <input type="submit" value="Edit" />
        </form> 
      </td>
    <?php
      foreach ($all_property as $item) { 
        echo '<td>' . $row[$item] . '</td>';
        }
      }
      echo '</tr></tbody>
      </table>';
    ?>
  </div>
</body>
</html>
