<?php
include 'nav.php';

if ((isset($_SESSION['type'])) && (isset($_SESSION['type'])) ){

  if ( $_SESSION['type'] == 1) {// le patient n as pas des patient
  echo '<script> window.location="index.php"</script>';
  exit();}



if(  (isset($_GET['patientId'])) && (isset($_GET['day'])) ) {

$conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");

$check = "select * from rdv where  date(date)='".$_GET['day']."' and puser='".$_GET['patientId']."' "; //pour confirmer que ce patient n est pas deja inscrit dans cette journee

if (mysqli_num_rows($conn->query($check)) !=0) {
  echo '<span  align="center" style="font-size:30px;"> ce patient est deja incrit dans cette journee , reesseyer svp :) </span>';
  exit();
}


$dated = new DateTime($_GET['day'].'T08:00:00'); // temp de debut de la journee
$datef = new DateTime($_GET['day'].'T16:00:00'); // temp de fin de la journee
$i =0;

echo '<form action="confirmrdvd.php" method="get">';

while ($dated <= $datef ){

  $sql = " SELECT * from rdv where (duser='".$_GET['patientId']."')  AND  (date='".$dated->format('Y-m-d H:i')."')";
  $row = $conn->query($sql);
  $n = mysqli_num_rows($row);

  if ( $n== 0 ){
  echo '<div > <label ><input  name="rdv" type="radio" value="'.$dated->format('Y-m-d H:i').'">&nbsp;&nbsp;&nbsp;&nbsp;'.$dated->format('Y-m-d H:i').'</label></div  >';
  $i++;
}


  $dated->add(new DateInterval('PT15M'));
}
echo '<input name="patientId" type="text" style="display:none;" value="'.$_GET['patientId'].'" >';
echo '<button type="submit" > Confirmer le rendez vous </button>';
echo "</form>";

}

}else {

  echo '<script> window.location="index.php"</script>';
  exit();

}
?>
