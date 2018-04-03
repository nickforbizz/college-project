<?php
require 'connectDb.php';

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['regNumber']) &&
    isset($_POST['pAddress']) && isset($_POST['county']) && isset($_POST['telephone'])
    && isset($_POST['bornday']) && isset($_POST['gender']) &&
    isset($_POST['religion']) && isset($_POST['idNo'])
  ) {
  if (
    !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['regNumber']) &&
    !empty($_POST['pAddress']) && !empty($_POST['county']) && !empty($_POST['telephone'])
    && !empty($_POST['bornday']) && !empty($_POST['gender']) &&
    !empty($_POST['religion']) && !empty($_POST['idNo'])
  ) {
    function validateStudent($name){
      $name = trim($name);
      $name = stripslashes($name);
      $name = htmlspecialchars($name);
      return $name;
    }
    $fname = validateStudent($_POST['fname']); $lname = validateStudent($_POST['lname']); $regNumber = validateStudent($_POST['regNumber']); $pAddress = validateStudent($_POST['pAddress']);
    $county = validateStudent($_POST['county']); $telephone=validateStudent( $_POST['telephone']); $religion = validateStudent($_POST['religion']); $idNo = validateStudent($_POST['idNo']);
    $gender = validateStudent($_POST['gender']); $bornday= validateStudent($_POST['bornday']); $email = validateStudent($_POST['email']); $age =validateStudent( $_POST['age']);
    $pCode = validateStudent($_POST['pCode']); $town= validateStudent($_POST['town']); $constituency = validateStudent($_POST['constituency']); $country =validateStudent( $_POST['country']);
    $course = validateStudent($_POST['course']); $mstatus= validateStudent($_POST['mstatus']); $nationality = validateStudent($_POST['nationality']); $kin= validateStudent($_POST['kin']);
    $date_enrolled = date('d/m/Y');
    $res1 = $connDb->query("SELECT regNumber FROM enrolled_studs WHERE regNumber = '$regNumber'");
    $regExists = $res1->fetch_assoc();
    $regExists = $regExists['regNumber'];
    if($regNumber != $regExists){
        if(
            $connDb->query("INSERT INTO enrolled_studs (fname, lname, regNumber, pAddress, county, telephone,
                                                        religion, idNo, gender,bornday, email, age, pCode,town,
                                                        constituency,country, course, mstatus, nationality, kin,enrollDate)
                            VALUES ('$fname', '$lname', '$regNumber', '$pAddress', '$county', '$telephone',
                                    '$religion', '$idNo', '$gender', '$bornday', '$email', '$age', '$pCode', '$town',
                                    '$constituency', '$country', '$course', '$mstatus', '$nationality', '$kin', '$date_enrolled')" )
              ){
                echo "<pre class='load_results'>
                          The Details of the Student were Posted Succesfully
                      </pre>";
                      echo "";
              }else {
                echo " <p class='load_results'>Details Were Not Insered</p>";
              }
          }else {
            echo "<p class='well text-center load_results'> Regestration Number Exists.";
          }
  } #END OF EMPTY VALIDATION
}else{
  echo "<pre  class='load_results'>
            Something Went Wrong.

                Try Again.
            If the probrem persists seek guidance from Sys Admin
        </pre>";
}#END OF ISSET VALIDATION


 ?>
