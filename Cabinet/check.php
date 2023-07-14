<?php
if(isset($_POST["patient"]) && $_POST["patient"] != ""){
  $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");

    $username = mysqli_real_escape_string($conn,$_POST['patient']);
  $res = $conn->query("SELECT user FROM patient WHERE user='$username' ");

  if( (mysqli_num_rows($res)) != 0 ){
    echo 'username is taken';
    exit();
  }
  else
  echo 'username available';
     //mysql_num_rows — Get number of rows in result

}
elseif (isset($_POST["docteur"]) && $_POST["docteur"] != ""){
  $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");

    $username = mysqli_real_escape_string($conn,$_POST['docteur']);
  $res = $conn->query("SELECT user FROM doc WHERE user='$username' ");

  if( (mysqli_num_rows($res)) != 0 ){
    echo 'username is taken';
    exit();
  }
  else
  echo 'username available';
     //mysql_num_rows — Get number of rows in result

}
?>
