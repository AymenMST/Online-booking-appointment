<?php if ( isset($_SESSION['user'] ) && isset($_SESSION['type']) )
{
if ($_SESSION['type']== 1) {
  $url = 'index.php';
  echo"<script>window.location = '$url';</script>";
exit();    // c est un patient qui veut acceder a le profile d un medcin

}
  $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");
  $sql = "SELECT * FROM doc WHERE user='".$_SESSION['user']."'"; // le patient peut voir les profiles des medcins

  $result=$conn->query($sql);

  $row= mysqli_fetch_assoc($result) ;


  switch ($row['spec']) {

  case "1" : $row['spec']="ORL Tête et cou";
  break;

  case"2":  $row['spec']="Orthopédie et Rachis";
  break;
  case"3": $row['spec']="Ophtalmologie";
  break;
  case"4": $row['spec']="Chirurgie Plastique";
  break;
  case"5": $row['spec']="Chirurgie Dentaire" ;
  break;
  case"6": $row['spec']="Pneumologie ";
  break;
  case"7": $row['spec']="Cardiologie";
  break;
  case"8": $row['spec']="Gastro-Entérologie";
  break;
  case"9": $row['spec']="Anesthésie";
  break;
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



}
else {
// l'utilisateur n'est pas connecter
  $url = 'index.php';
  echo"<script>window.location = '$url';</script>";
  exit();
}

?>
<!DOCTYPE html>
<html>
<head>
<script>
function myfunction(x){
  document.getElementById(x).style.display = "inline";
  }

function edit(x){

  var user = document.getElementById(x).value;
      var hr = new XMLHttpRequest();
    hr.open("POST", "edit.php", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // header de la requette
    hr.onreadystatechange = function() { //Defines a function to be called when the readyState property changes
      if(hr.readyState == 4 && hr.status == 200) {   //readyState = 4 4: request finished and response is ready  ,status	=200 : OK
        alert("congratulation! "+x+"  edited with success ");
        window.location="MonProfile";

      }
    }
        var v = x+"="+user;

        hr.send(v);

  }






</script>
<style>
button{
background-color:  #e6fefa ;
border: none;
}
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
.edit {

  display: none;
}
</style>

</head>

<body>

<div class="bar">

<div class="table">
<table width="50%" border="0">
    <tr>
      <td rowspan="3" width="25%" ><img src="<?php echo $row['path'] ;?>"/></td>
      <td><strong><?php echo'Dr.'.$row['nom']; ?></strong><button  onClick="myfunction('nom')" ><span class="glyphicon glyphicon-edit" ></span></button>   <input id="nom" class="edit" onBlur="edit('nom')" type=text  >
</td>

    </tr>
  </tr>
    <tr>
      <td><?php echo $row['email']; ?><button onclick="myfunction('email')" ><span class="glyphicon glyphicon-edit"></span></button> <input onBlur="edit('email')" type="email" id="email" class="edit" required ></td>
    </tr>
    <tr>
      <td><?php echo $row['tel']; ?><button onclick="myfunction('tel')" ><span class="glyphicon glyphicon-edit"></span></button><input  class="edit" required type="tel" id="tel" onBlur="edit('tel')" ></td>
    </tr>
 </table>
<table class="grey" border="0" width="50%" >
 <tr>
<td width="50%">   Wilaya :</td> <td><?php echo $row['wilaya']?><button style="background-color:white;" onClick="myfunction('wilaya')" ><span class="glyphicon glyphicon-edit"></span></button></td>
  </tr>
  <tr> <td></td>
  <td>
  <select id="wilaya" name="wilaya" class="edit" onBlur="edit('wilaya')"  >
            <option selected="selected" value="00">--</option>
            <option value="01">ADRAR</option>
            <option value="46">AIN TEMOUCHENT</option>
            <option value="44">AIN-DEFLA</option>
            <option value="16">ALGER</option>
            <option value="23">ANNABA</option>
            <option value="34">B.B. ARRERIDJ</option>
            <option value="05">BATNA</option>
            <option value="08">BECHAR</option>
            <option value="06">BEJAIA</option>
            <option value="07">BISKRA</option>
            <option value="09">BLIDA</option>
            <option value="10">BOUIRA</option>
            <option value="35">BOUMERDES</option>
            <option value="02">CHLEF</option>
            <option value="25">CONSTANTINE</option>
            <option value="17">DJELFA</option>
            <option value="32">EL BAYADH</option>
            <option value="36">EL TARF</option>
            <option value="39">EL-OUED</option>
            <option value="47">GHARDAIA</option>
            <option value="24">GUELMA</option>
            <option value="33">ILLIZI</option>
            <option value="18">JIJEL</option>
            <option value="40">KHENCHELA</option>
            <option value="03">LAGHOUAT</option>
            <option value="29">MASCARA</option>
            <option value="26">MEDEA</option>
            <option value="43">MILA</option>
            <option value="27">MOSTAGANEM</option>
            <option value="28">MSILA</option>
            <option value="45">NAAMA</option>
            <option value="31">ORAN</option>
            <option value="30">OUARGLA</option>
            <option value="04">OUM EL BOUAGHI</option>
            <option value="48">RELIZANE</option>
            <option value="20">SAIDA</option>
            <option value="19">SETIF</option>
            <option value="22">SIDI BEL-ABBES</option>
            <option value="21">SKIKDA</option>
            <option value="41">SOUK AHRAS</option>
            <option value="11">TAMANRASSET</option>
            <option value="12">TEBESSA</option>
            <option value="14">TIARET</option>
            <option value="37">TINDOUF</option>
            <option value="42">TIPAZA</option>
            <option value="38">TISSEMSILT</option>
            <option value="15">TIZI-OUZOU</option>
            <option value="13">TLEMCEN</option>

          </select>
          </td>
  </tr>
  <tr>
<td width="50%" >  Specialite  </td> <td><?php echo $row['spec']?><button style="background-color:white;"onClick="myfunction('spec')" ><span class="glyphicon glyphicon-edit"></span></button></td>
  </tr>
  <tr> <td></td>
  <td>  <select id="spec" onBlur="edit('spec')"   class="edit">
                                                          <option value="1">ORL Tête et cou</option>
                                                          <option value="2">Orthopédie et Rachis</option>
                                                          <option value="3">Ophtalmologie</option>
                                                          <option value="4">Chirurgie Plastique</option>
                                                          <option value="5">Chirurgie Dentaire</option>
                                                          <option value="6">Pneumologie</option>
                                                          <option value="7">Cardiologie</option>
                                                          <option value="8">Gastro-Entérologie</option>
                                                          <option value="9">Anesthésie</option>
                                                               </select></td>

  </td>
</tr>


  <tr>
<td width="50%" >  Diplome  </td> <td><?php echo $row['diplome']?><button style="background-color:white;" onclick="myfunction('diplome')" ><span class="glyphicon glyphicon-edit"></span></button></td>
  </tr>
  <tr> <td></td>
  <td>
    <select id="diplome" onBlur="edit('diplome')"  class="edit" >
                                                            <option selected="selected" value="00">--</option>
                                                            <option value="1">généraliste</option>
                                                            <option value="2">specialiste</option>
                                                            <option value="3">Maitre-assistant</option>
                                                            <option value="4">Professeur</option>
                                                                 </select></td>
  </td>
</tr>
  <tr>
<td width="50%" >  Adress :  </td> <td><?php echo $row['adress']?> <button style="background-color:white;" onclick="myfunction('adress')" ><span class="glyphicon glyphicon-edit"></span></button> <input class="edit" type="text" onBlur="edit('adress')"  maxlength="100"    id="adress" ></td>
  </tr>

</table>

<table border="0" width="50%">
 <tr>
   <td ><a target="_blank" href="mrdv.php?user=<?php echo $_SESSION['user'];?>">Mes rendez vous </a>   </td>
   </tr>
</table>
</div>

</div>

</body>
</html>
