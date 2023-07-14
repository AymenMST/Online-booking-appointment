<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link rel="stylesheet" href="\custom-reg.css">



<script>
function checkusername(){
	var status = document.getElementById("usernamestatus");
	var user = document.getElementById("username").value;
	if(user != ""){
		status.innerHTML = 'checking...';
		var hr = new XMLHttpRequest();
		hr.open("POST", "check.php", true);
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // header de la requette
		hr.onreadystatechange = function() { //Defines a function to be called when the readyState property changes
			if(hr.readyState == 4 && hr.status == 200) {   //readyState = 4 4: request finished and response is ready  ,status	=200 : OK
				status.innerHTML = hr.responseText;
      }
		}
        var v = "patient="+user;
        hr.send(v);


	}
}

</script>
</head>
<body>
<?php
include 'nav.php';
?>
<form class="regForm" method="post" action="\registrationpatient.php">
  <table >
<tr>

 <td> <label for="user"><b>num&nbsp;id&nbsp;national&nbsp;:</b></label> </td><td> <input type=text minlength="4" maxlength="15" onBlur="checkusername()"  type="text" id="username" name="username" ><span style="color:red; font-weight:bold;" id="usernamestatus"></span>
</td>
 </tr>
 <tr> <td><br/></td><td></td> </tr>
 <tr>

  <td> <label for="user"><b>Nom&nbsp;Complet:</b></label> </td><td> <input type=text minlength="4" maxlength="15" onBlur="checkusername()"  type="text" id="username" name="nom" ><span style="color:red; font-weight:bold;" id="usernamestatus"></span>
 </td>
  </tr>
  <tr> <td><br/></td><td></td> </tr>


 <tr>
  <td> <label for="pass">mot&nbsp;de&nbsp;pass:&nbsp;</label></td><td>   <input  type="password" minlength="6" maxlength="20" name="pass"></td>
</tr>


<tr> <td><br/></td><td></td> </tr>

<tr>
 <td> <label for="email">E-mail&nbsp;:</label></td><td>   <input type="email" name="mail" ></td>
</tr>
<tr> <td><br/></td><td></td> </tr>

<tr>
 <td> <label for="num">Num&nbsp;de&nbsp;telephone&nbsp;:</label></td><td>   <input  type="tel" name="num" ></td>
</tr>
<tr> <td><br/></td><td></td> </tr>

<tr>
 <td> <label for="date">date&nbsp;de&nbsp;Naissance&nbsp;:</label></td><td>   <input  type="date" name="dateN" ></td>
</tr>


<tr> <td><br/></td><td></td> </tr>

<tr>
  <td><label for="wilaya">Wilaya&nbsp;:</label> </td>  <td> <select name="wilaya" >
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
            <option value="28">M'SILA</option>
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
<table >
  <tr>
 <td><button type="submit">registrer</button></td> <td><button type="reset">reinisializer</button></td>
</tr>
</table>
</form>

<div style="height:400px; width:100%;"></div>
<?php

$conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $username= mysqli_real_escape_string($conn,$_POST["username"]);
  $pass= mysqli_real_escape_string($conn,$_POST['pass']);

  $mail= mysqli_real_escape_string($conn,$_POST['mail']);

  $tel= mysqli_real_escape_string($conn,$_POST['num']);
  $wilaya= mysqli_real_escape_string($conn,$_POST['wilaya']);
  $date= mysqli_real_escape_string($conn,$_POST['dateN']);
  $sex= mysqli_real_escape_string($conn,$_POST['sex']);
  $nom= mysqli_real_escape_string($conn,$_POST['nom']);


if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);


    $sql = "INSERT INTO patient (user, pass,email,tel,wilaya,dateN,sex,nom)
    VALUES ('$username', '$pass','$mail','$tel','$wilaya','$date','$sex','$nom')";


    if ($conn->query($sql) === TRUE) {
      $url='redirect.php';

    echo '<script>window.location = "'.$url.'";</script>';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

</body>


</html>
