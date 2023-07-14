<?php
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>aymen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
  <link rel="stylesheet" href="\custom-nav.css">
</head>
<body>

<nav class="navbar">
    <div class="navbar-header">
      <button   type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="\index.php" class="navbar-brand"><img id="logo" src="\logo.bmp"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="\index.php"><b>Home</b></a></li>
      <?php if (isset( $_SESSION['user']) && ($_SESSION['type']==1) )
echo  '<li><a href="\chercher.php"><b>chercher des médecins</b></a></li>'; ?>
        <li><a href="#"><b>Contact us</b></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if  (isset( $_SESSION['user']))  {
        echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              <li><a href="MonProfile.php"><span class="glyphicon glyphicon-user"></span> Mon Profile</a></li>  ';

              if ($_SESSION['type']==2) // utilisateur est un docteur
              echo '<li><a href="\myPatient.php"><span class="glyphicon glyphicon-user"></span>Mes malades</a></li>';
              elseif  ($_SESSION['type']==1) // utilisateur est un patient
              echo '<li><a href="\myrdv.php"><span class="glyphicon glyphicon-user"></span>Mes redndez vous</a></li>';
}
        else  // utilisateur n est pas connecter
        echo '<li><a href="\signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';

    ?>  </ul>
    </div>
</nav>
</body>
</html>
