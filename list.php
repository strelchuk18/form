<!DOCTYPE html>
<html>
<head>
  <title>FORM</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <div class="postcard">
    <?php
      $connection = mysqli_connect('localhost', 'root', 'rootroot');
      if($connection == false)
      {
        exit();
      }

      $db=mysqli_select_db($connection, "resource");
        mysqli_set_charset("utf8");
      if (!$connection || !$db) {
        exit(mysqli_error());
      }

      $result = mysqli_query($connection,"SELECT * FROM users");
      $all_property = array();

      echo '<table border = "3">
              <tr>';
      while ($property = mysqli_fetch_field($result)) {
        echo '<td>' . $property->name . '</td>';
        array_push($all_property, $property->name);
      }
      echo '</tr>';

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        foreach ($all_property as $item) {
          echo '<td>' . $row[$item] . '</td>';
      }
        echo '</tr>';
      }
      echo "</table>";
    ?>
  </div>
</body>
</html>
