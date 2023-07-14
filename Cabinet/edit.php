<?php
session_start();
if (isset($_SESSION['user']) && isset($_SESSION['type'])) {

if ($_SESSION['type'] == 1 )
    $db = "patient";
else
    $db =="doc";

 if (isset($_POST['wilaya'])){
   $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
   $sql = "UPDATE `".$db."` SET `wilaya` = '".$_POST['wilaya']."' WHERE ".$db.".`user` = '".$_SESSION['user']."'";
   $conn->query( $sql);
 }


 elseif (isset($_POST['adress'])){
   $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
   $sql = "UPDATE `".$db."` SET `adress` = '".$_POST['adress']."' WHERE `".$db."`.`user` = '".$_SESSION['user']."'";
 $conn->query( $sql );
 }



  elseif (isset($_POST['email'])){
    $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
    $sql = "UPDATE `".$db."` SET `email` = '".$_POST['email']."' WHERE `".$db."`.`user` = '".$_SESSION['user']."'";
  $conn->query( $sql );
  }






   elseif (isset($_POST['tel'])){
     $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
     $sql = "UPDATE `".$db."` SET `tel` = '".$_POST['tel']."' WHERE `".$db."`.`user` = '".$_SESSION['user']."'";
   $conn->query( $sql );
   }



 elseif (isset($_POST['nom'])){
   $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
   $sql = "UPDATE `".$db."` SET `nom` = '".$_POST['nom']."' WHERE `".$db."`.`user` = '".$_SESSION['user']."'";
 $conn->query( $sql );
 }



  elseif (isset($_POST['diplome'])){
    $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
    $sql = "UPDATE `".$db."` SET `diplome` = '".$_POST['diplome']."' WHERE `".$db."`.`user` = '".$_SESSION['user']."'";
  $conn->query( $sql );
  }



      elseif (isset($_POST['spec'])){
        $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
        $sql = "UPDATE `".$db."` SET `spec` = '".$_POST['spec']."' WHERE `".$db."`.`user` = '".$_SESSION['user']."'";
      $conn->query( $sql );
      }



      elseif (isset($_POST['sex'])){
        $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
        $sql = "UPDATE `".$db."` SET `sex` = '".$_POST['sex']."' WHERE `".$db."`.`user` = '".$_SESSION['user']."'";
      $conn->query( $sql );
      }



      elseif (isset($_POST['date'])){
        $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
        $sql = "UPDATE `".$db."` SET `dateN` = '".$_POST['date']."' WHERE `".$db."`.`user` = '".$_SESSION['user']."'";
      $conn->query( $sql );
      }


}
 else {
   exit(); // l utilisateur n est pas connecter
 }

?>
