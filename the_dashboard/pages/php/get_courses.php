<?php
require 'conn.php';

$sql = $conn->query("select id, name from courses");
echo "<option  disabled selected>Select Course</option>";
while ($a = $sql->fetch_assoc()) {
  echo "<option value=".$a['id'].">".$a['name']."</option>";
}

 ?>
