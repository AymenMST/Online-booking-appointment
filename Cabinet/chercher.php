<?php
include 'nav.php';

if ($_SESSION['type'] == 2 ) // le medcin  ne peut pas chercher des autre medcin
  exit();
  ?>
<!DOCTYPE html>
<html>

<head>
<title>chercher des medcin </title>
<style>
select   {
  margin :10%;
  padding-left: 10%;
  padding-right: 10%;
  border-color: #05E1C0 ;

  }

.form {
  width : 35%;
  margin: auto;
}
button {
  border: none;
   color: white;
   padding: 15px 100px;
   text-align: center;
   text-decoration: none;
   font-size: 16px;
   width: 20%;
   margin-left: 40%;
   background-color: #05E1C0;
}
</style>

</head>
<body>

<form method="get" action="liste.php">
  <table class="form">
    <tr>
     <td> <label for="diplome">Diplome&nbsp;:</label></td><td><select name="diplome" >
                                                             <option value="0">tous</option>
                                                             <option value="1">généraliste</option>
                                                             <option value="2">specialiste</option>
                                                             <option value="3">Maitre-assistant</option>
                                                             <option value="4">Professeur</option>
                                                                  </select></td>
    </tr>
    <tr> <td><br/></td><td></td> </tr>
    <tr>
     <td> <label for="specialite">Spécialité&nbsp;:</label></td><td><select name="spec"  >
                                                             <option value="0">tous</option>
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
    </tr>
    <tr> <td><br/></td><td></td> </tr>

    <tr>
  <tr>
    <td><label for="wilaya">Wilaya :</label> </td>  <td> <select name="wilaya"  >
              <option value="0">tous</option>
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
  <tr>
    <td colspan="2"><button type="submit">Chercher&nbsp;<span class="glyphicon glyphicon-search"> </span></button> </td>

</table>
</form>



</body>
</html>
