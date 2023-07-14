<?php

include 'nav.php';

if ( isset($_SESSION['user']) && isset($_GET['user']) && isset($_GET['rdv'])) {
  $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");

  $query =" INSERT INTO `rdv` (`id`, `puser`, `duser`, `date`) VALUES (NULL,'".$_SESSION['user']."', '".$_GET['user']."', '".$_GET['rdv']."')" ;

if ($conn->query($query) === TRUE)
echo '<div class="redirect"> felicitation! </br>votre rendez vous a ete enregistrer avec succes :)</div>';


} else {
 echo "<script>   window.location='index.php'; </script>" ;
  exit();
}
?>
<!Doctype html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

<style>
.redirect{
width: 100%;
height: auto;
font-family: 'Comfortaa' , cursive;
text-align: center;
margin-top: 50px;
font-size:   30px;
}
</style>

<script>
function onload(){
setTimeout(redirect,3000);
}
function redirect() {
  window.location='index.php';
}
</script>
</head>
<body onload="onload()">



</body>
</html>
