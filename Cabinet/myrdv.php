<?php
include 'nav.php';

if ( isset($_SESSION['user'] ) && isset($_SESSION['type']) ){

   if($_SESSION['type']==2 ){ // le docteur n'as pas des rendez vous
  echo'<script>window.location ="index.php";</script>';
   exit();  }

   $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
   $sql = "SELECT * FROM rdv WHERE puser='".$_SESSION['user']."'";
   $rdv = $conn->query($sql);
   $i=0;
?>
<head>
  <link rel="stylesheet" href="\listecss.css">

</head>
<table border="1" width="50%" align="center">

<?php

while ($row = $rdv->fetch_assoc()) {


  $i++;
    ?>



  <tr><th colspan="2" > Rendez Vous Num <?php echo "$i: "; ?></a></th> </tr>

  <tr> <td width="30%"> profile du docteur : </td>     <td> <a href="\profile.php?user=<?php echo $row['duser'];?>" >  Docteur <?php echo "$i: "; ?> </a></td></tr>
  <tr> <td width="30%"> date : </td>     <td> <?php echo $row['date']; ?>  </td></tr>




<?php
}

}
else {  // si l'utilisateur n est pas connecter alors en le redirect vers la page d acceuille

$url = 'index.php';
echo"<script>window.location = '$url';</script>";
exit();
}



?>
