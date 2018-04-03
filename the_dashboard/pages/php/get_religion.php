
<?php
require 'conn.php';

$sql = $conn->query("select id, name from religion");
  echo "<option  disabled selected>Select Religion</option>";
while ($a = $sql->fetch_assoc()) {

  echo "<option value=".$a['id'].">".$a['name']."</option>";
}

 ?>
