<?php
session_start();

if (isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['type']) ) {
  $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");

$username = mysqli_real_escape_string($conn,$_POST['user']);
$password = mysqli_real_escape_string($conn,$_POST['pass']);
$type = mysqli_real_escape_string($conn,$_POST['type']);

if ($_POST['type']==1)
$db="patient";
else
$db="doc";

$sql = "SELECT * FROM ".$db." where (user='".$username."' AND pass='".$password."')";

$result = $conn->query($sql);
$url = 'login.php';
$url2 = 'index.php';
if (mysqli_num_rows($result) > 0){
$_SESSION['user']=$username;
$_SESSION['type']=$type;
echo "<script>window.location = '$url2';</script>";

}
else
echo "<script type='text/javascript'>alert('Uncorrect username or password');window.location = '$url';</script>";
}
?><html>
<head>
</head>
<body>


</body>
</html>
