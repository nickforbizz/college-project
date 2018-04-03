<?php
require 'conn.php';

$sql = $conn->query("select f.id, f.yr_date, f.semister, f.amount, f.year,c.id idcourse, c.name Course

 from fees f

 left join courses c on c.id = f.course");
 $sql2 = $conn->query("SELECT id, name, type FROM courses");
echo "<div class='col-md-3'>";
 echo "<label> Select fees</label> <br>";
 echo "<select  class='btn-lg' name='amount' required>";
 echo "<option  disabled selected>Select amount</option>";
 while ($a = $sql->fetch_assoc()) {
   echo "<option value=".$a['id'].">".$a['amount']."</option>";
 }
 echo "</select> <br> </div>";

echo "<div class='col-md-3'><label> Select course</label> <br>";
echo "<select  class='btn-lg' name='course' required>";
echo "<option  disabled selected>Select Course</option>";
while ($b = $sql2->fetch_assoc()) {
  echo "<option value=".$b['id'].">".$b['name']."/ ".$b['type']."</option>";
}
echo "</select> <br></div>";

echo "<div class='col-md-3'><label> Select yr</label> <br>";
echo "<select class='btn-lg' name='year' required>";
echo "<option  disabled selected>Select yr of study</option>";
// while ($a = $sql->fetch_assoc()) {
  echo "<option value='1'> Year 1</option>";
  echo "<option value='2'> Year 2</option>";
  echo "<option value='3'> Year 3</option>";
  echo "<option value='4'> Year 4</option>";
echo "</select> <br></div>";

echo "<div class='col-md-3'><label> Select sem</label><br>";
echo "<select   class='btn-lg' name='semester' required>";
echo "<option  disabled selected>Select semester</option>";
// while ($a = $sql->fetch_assoc()) {
  echo "<option value='1'>Sem 1</option>";
  echo "<option value='2'>Sem 2</option>";
  echo "<option value='3'>Sem 3</option>";

// }
echo "</select></div>";
 ?>
