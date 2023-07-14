<?php
include 'nav.php';
if ( (isset($_SESSION['user'])) && (isset($_SESSION['type']))  ) {

                  if ( $_SESSION['type'] == 1) {// le patient n as pas des patient
                  echo '<script> window.location="index.php"</script>';
                  exit();}


} else { // utilisateur non connecter

echo '<script> window.location="index.php"</script>';
exit();
}
?>

<head>

  <style>

  label {
     background:#E6F7FF ;
     color:#19527C;
     border-radius:8px;
     padding:32px;
     text-align: center;
     cursor:pointer;
     width: 100%;
     margin-left: 35%;

  }

table{
margin: auto;
width:40%;
}
  button{
    border: none;
     color: white;
     padding: 15px 32px;
     text-align: center;
     text-decoration: none;
     font-size: 16px;
     width: 20%;
     margin-left: 40%;
     margin-top: 30px;
     background-color: #05E1C0;
  }


  </style>

    <script>
function list(){
  window.location="mylist.php";
}


    </script>


</head>
<form method="get" action="ajouterrdvd.php">
<table border="0">
<tr><td><label> Ajouter un Malade  </label></td> <td> <label><input name="patientId" type="number" placeholder="ID national du patient"></label></td></tr>
<tr><td><label>Date :</label></td> <td><label><input name="day" type="date" ></label></td> </tr>
</table>
<button type="submit"> confirmer</button>
</form>

 <button onclick="list()">la liste de Mes Malades</button>
