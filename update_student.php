<?php
require 'connectDb.php';
// function passFormData($x)
// {
//   global $connDb;
//   if($connDb->query("SELECT fname lname FROM enroll_students") ){
//       $connDb->query("UPDATE enroll_students SET fname = '$x', lname='$y' WHERE id = $z ");
//   }
// }
print_r($_POST);
if (isset($_POST['reg'])) {
      if (isset($_POST['Name']) && isset($_POST['lastname'])) {
          $reg = @$_POST['reg'];
          $fname = $_POST['Name'];
          $lname = $_POST['lastname'];
          // echo $reg." <br>"; echo $fname."<br> "; echo $lname;
          if($connDb->query("UPDATE enrolled_studs SET fname = '$fname', lname = '$lname' WHERE regNumber = '$reg'") ){
            echo "<div class = 'jumbotron text-center' >
                    The data Succesfully changed to: <br> <b>".$fname."</b>  <b>".$lname."</b>
                    </div>";
                  }else {
                      echo "<div class = 'jumbotron'> Error Occured</div>";
                    }
      }elseif (isset($_POST['Reg Number'])) {
        $reg = $_POST['Reg Number'];
        $reg = @$_POST['reg'];
        if($connDb->query("UPDATE enrolled_studs SET regNumber = '$reg' WHERE regNumber = '$reg'") ){
          echo "<div class = 'jumbotron text-center' >
                  The data Succesfully changed to: <br> <b>".$reg."</b>
                  </div>";
                }else {
                    echo "<div class = 'jumbotron'> Error Occured</div>";
                  }
      }elseif (isset($_POST['Telephone'])) {
        $telephone = $_POST['Telephone'];
        $reg = @$_POST['reg'];
        if($connDb->query("UPDATE enrolled_studs SET telephone = '$telephone' WHERE regNumber = '$reg'") ){
          echo "<div class = 'jumbotron text-center' >
                  The data Succesfully changed to: <br> <b>".$telephone."</b>
                  </div>";
                }else {
                    echo "<div class = 'jumbotron'> Error Occured</div>";
                  }
      }elseif (isset($_POST['Religion'])) {
        $religion = $_POST['Religion'];
        $reg = @$_POST['reg'];
        if($connDb->query("UPDATE enrolled_studs SET religion = '$religion' WHERE regNumber = '$reg'") ){
          echo "<div class = 'jumbotron text-center' >
                  The data Succesfully changed to: <br> <b>".$religion."</b>
                  </div>";
                }else {
                    echo "<div class = 'jumbotron'> Error Occured</div>";
                  }
      }elseif (isset($_POST['Email'])) {
        $email = $_POST['Email'];
        $reg = @$_POST['reg'];
        if($connDb->query("UPDATE enrolled_studs SET email = '$email' WHERE regNumber = '$reg'") ){
          echo "<div class = 'jumbotron text-center' >
                  The data Succesfully changed to: <br> <b>".$email."</b>
                  </div>";
                }else {
                    echo "<div class = 'jumbotron'> Error Occured</div>";
                  }
      }elseif (isset($_POST['constituency'])) {
        $constituency = $_POST['constituency'];
        $reg = @$_POST['reg'];
        if($connDb->query("UPDATE enrolled_studs SET constituency = '$constituency' WHERE regNumber = '$reg'") ){
          echo "<div class = 'jumbotron text-center' >
                  The data Succesfully changed to: <br> <b>".$constituency."</b> 
                  </div>";
                }else {
                    echo "<div class = 'jumbotron'> Error Occured</div>";
                  }
      }elseif (isset($_POST['Town'])) {
        $town = $_POST['Town'];
        $reg = @$_POST['reg'];
        if($connDb->query("UPDATE enrolled_studs SET town = '$town' WHERE regNumber = '$reg'") ){
          echo "<div class = 'jumbotron text-center' >
                  The data Succesfully changed to: <br> <b>".$town."</b>
                  </div>";
                }else {
                    echo "<div class = 'jumbotron'> Error Occured</div>";
                  }
      }elseif (isset($_POST['Kin'])) {
        $kin = $_POST['Kin'];
        $reg = @$_POST['reg'];
        if($connDb->query("UPDATE enrolled_studs SET kin = '$kin' WHERE regNumber = '$reg'") ){
          echo "<div class = 'jumbotron text-center' >
                  The data Succesfully changed to: <br> <b>".$kin."</b>
                  </div>";
                }else {
                    echo "<div class = 'jumbotron'> Error Occured</div>";
                  }
      }else{
        echo "Something went wrong";
      }
}
if (isset($_POST['reg'])) {
  # code...
}

 ?>
