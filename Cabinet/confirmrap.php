<?php

include 'nav.php';

if (isset($_POST['patient'] ) && isset($_POST['rap'])){


  $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
  $sql = "INSERT INTO `rapport` (`id`, `puser`, `duser`, `rapp`) VALUES (NULL, '".$_POST['patient'] ."', '".$_SESSION['user']."','".$_POST['rap']."')";
$conn->query( $sql );

}


?>
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
<body onload="onload();">


<div class="redirect"> felicitation ! </br>le rapport a ete enregistrer avec succes</div>

</body>
</html>
