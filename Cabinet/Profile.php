  <?php
  include 'nav.php';
  if ( isset($_SESSION['user'] ) && isset($_SESSION['type']) && isset($_GET['user'])){

    if ($_SESSION['type']==1)  // si l utilisateur est un patient alors il cherche des medcins
    include 'profiledoc.php';
    else if($_SESSION['type']==2 ) // l inverse (le docteur ne peut acceder que vers les profiles des patients)
               include 'profilepat.php';
}
else {  // si l'utilisateur n est pas connecter alors en le redirect vers la page d acceuille

  $url = 'index.php';
  
  echo"<script>window.location = '$url';</script>";
  exit();
}


?>
