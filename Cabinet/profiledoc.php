<?php
if ($_SESSION['type'] == 2 ){ //cela veut dire un docteur qui veut acceder a le profile d'autre docteur
  $url = 'index.php';
  echo"<script>window.location = '$url';</script>";
  exit();
}
$conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
$sql = "SELECT * FROM doc WHERE user='".$_GET['user']."'"; // le patient peut voir les profiles des medcins

$result=$conn->query($sql);

$row= mysqli_fetch_assoc($result) ;


switch ($row['spec']) {
case "1" :$row['spec']="ORL Tête et cou";
case"2":$row['spec']="Orthopédie et Rachis";
case"3":$row['spec']="Ophtalmologie";
case"4":$row['spec']="Chirurgie Plastique";
case"5":$row['spec']="Chirurgie Dentaire" ;
case"6":$row['spec']="Pneumologie ";
case"7":$row['spec']="Cardiologie";
case"8":$row['spec']="Gastro-Entérologie";
case"9":$row['spec']="Anesthésie";
}


switch ($row['diplome']) {
case"1":$row['diplome']="généraliste";
          break;
case"2":$row['diplome']="specialiste";
break;
case"3":$row['diplome']="Maitre-assistant";
break;
case"4":$row['diplome']="Professeur";
break;
}



switch ($row['wilaya']) {
case"01":$row['wilaya']="ADRAR";
break;
case"46":$row['wilaya']="AIN-TEMOUCHENT";
break;
case"44":$row['wilaya']="AIN-DEFLA";
break;
case"16":$row['wilaya']="ALGER";
break;
case"23":$row['wilaya']="ANNABA";
break;
case"34":$row['wilaya']="B.B. ARRERIDJ";
break;
case"08":$row['wilaya']="BECHAR";
break;
case"05":$row['wilaya']="BATNA";
break;
case"06":$row['wilaya']="BEJAIA";
break;
case"07":$row['wilaya']="BISKRA";
break;
case"09":$row['wilaya']="BLIDA";
break;
case"10":$row['wilaya']="BOUIRA";
break;
case"35":$row['wilaya']="BOUMERDES";
break;
case"02":$row['wilaya']="CHLEF";
break;
case"25":$row['wilaya']="CONSTANTINE";
break;
case"17":$row['wilaya']="DJELFA";
break;
case"32":$row['wilaya']="EL BAYADH";
break;
case"36":$row['wilaya']="EL TARF";
break;
case"39":$row['wilaya']="EL-OUED";
break;
case"47":$row['wilaya']="GHARDAIA";
break;
case"24":$row['wilaya']="GUELMA";
break;
case"33":$row['wilaya']="ILLIZI";
break;
case"18":$row['wilaya']="JIJEL";
break;
case"40":$row['wilaya']="KHENCHELA";
break;
case"03":$row['wilaya']="LAGHOUAT";
break;
case"29":$row['wilaya']="MASCARA";
break;
case"26":$row['wilaya']="MEDEA";
break;
case"43":$row['wilaya']="MILA";
break;
case"27":$row['wilaya']="MOSTAGANEM";
break;
case"28":$row['wilaya']="MSILA";
break;
case"45":$row['wilaya']="NAAMA";
break;
case"31":$row['wilaya']="ORAN";
break;
case"30":$row['wilaya']="OUARGLA";
break;
case"04":$row['wilaya']="OUM EL BOUAGHI";
break;
case"48":$row['wilaya']="RELIZANE";
break;
case"20":$row['wilaya']="SAIDA";
break;
case"19":$row['wilaya']="SETIF";
break;
case"22":$row['wilaya']="SIDI BEL-ABBES";
break;
case"21":$row['wilaya']="SKIKDA";
break;
case"41":$row['wilaya']="SOUK AHRAS";
break;
case"11":$row['wilaya']="TAMANRASSET";
break;
case"12":$row['wilaya']="TEBESSA";
break;
case"14":$row['wilaya']="TIARET";
break;
case"37":$row['wilaya']="TINDOUF";
break;
case"42":$row['wilaya']="TIPAZA";
break;
case"38":$row['wilaya']="TISSEMSILT";
break;
case"15":$row['wilaya']="TIZI-OUZOU";
break;
case"13":$row['wilaya']="TLEMCEN";
break;

}





$row['path'] ="\Profile_pic/pic.jpg";

?>
<!DOCTYPE html>
<html>
<head>
<style>

.bar{
height: 200px;
background-color: #05e1c0;
}
.table{
position:absolute;
top:200px;
text-align: center;
}
table{
line-height: 50px;
margin-left: 25%;

}
.grey td{
background-color: white;
}
td{
background-color:  #e6fefa;
}
td img {
height: 120px;
width: auto;
}
</style>

</head>

<body>

<div class="bar">

<div class="table">
<table width="50%" border="0">
    <tr>
      <td rowspan="3" width="25%" ><img src="<?php echo $row['path'] ;?>"/></td>
      <td><strong><?php echo'Dr.'.$row['nom']; ?></strong></td>
    </tr>
    <tr>
      <td><?php echo $row['email']; ?></td>
    </tr>
    <tr>
      <td><?php echo $row['tel']; ?></td>
    </tr>
 </table>

<table class="grey" border="0" width="50%" >
  <?php
echo'  <tr>
<td width="50%">   Wilaya :</td> <td>'. $row['wilaya'].'</td>
  </tr>
  <tr>
<td width="50%" >  Specialite  </td> <td>'.$row['spec'].'</td>
  </tr>
  <tr>
<td width="50%" >  Diplome  </td> <td>'.$row['diplome'].'</td>
  </tr>

  <tr>
<td width="50%" >  Adress :  </td> <td>'.$row['adress'].'</td>
  </tr>';
 ?>
</table>

<table border="0" width="50%">
 <?php
   echo '<tr>
   <td ><a target="_blank" href="prdv.php?user='.$_GET['user'].'">   prendre un rendez vous</a>   </td>
   </tr>' ;
    ?>
</table>
</div>

</div>
