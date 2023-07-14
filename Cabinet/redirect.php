

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
<body onload="onload();">
  <?php
  include 'nav.php';
  ?>

<div class="redirect"> congratulation! </br>your account is successfully created</br> you will be redirected to home within 3 secondes</div>

</body>
</html>
