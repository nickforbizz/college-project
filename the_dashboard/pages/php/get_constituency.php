<?php
require 'conn.php';

$sql = $conn->query("select id, name from constituency");
echo "<option  disabled selected>Select Constituency</option>";
while ($a = $sql->fetch_assoc()) {
  echo "<option value=".$a['id'].">".$a['name']."</option>";
}

 ?>
