<?php
include 'nav.php';
if ( (isset($_SESSION['user'])) && (isset($_SESSION['type']))  ) {

                  if ( $_SESSION['type'] == 1) {// le patient n as pas de rapport
                  echo '<script> window.location="index.php"</script>';
                  exit();}


if (isset($_GET['user'])){
$sql = "SELECT * FROM rapport WHERE puser='".$_GET['user']."' AND duser='".$_SESSION['user']."'";
$conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
$resultat =$conn->query( $sql );
            if ( mysqli_num_rows($conn->query($sql)) ==0){
              echo '<div  align="center" style="font-size:30px;">il y as aucun rapport sur ce patient de votre part :)</div>' ;
              exit();
            }
$i=0;

while ($rap  = $resultat->fetch_assoc()){
  $i++;
?>

<table >
  <tr><td width="30%">Rapport num<?php echo $i ; ?> </td>  <td><p ><?php echo $rap['rapp']; ?></p></td></tr>
</table>
<?php
}


}
} else { // utilisateur non connecter

echo '<script> window.location="index.php"</script>';
exit();
}
?>

<head>
  <style>
  table{
      width:80%;
      margin:  10%;

  }
table td {
  height: 50px;
  text-align: center;
  background-color: #e6f7ff;
}
td:hover {background-color: #01EDC9;}

</style>
</head>
