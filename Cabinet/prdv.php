<?php
include 'nav.php';?>

<style>

label {
   background:#E6F7FF ;
   color:#19527C;
   border-radius:8px;
   padding:32px;
   text-align: center;
   cursor:pointer;
   width: 30%;
   margin-left: 35%;

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
   background-color: #05E1C0;
}
#day{
margin-left: 40%;
}
</style>



<form method="get" action="prdv.php" >
   <label for="day"> choisir le jour svp : </label> <br/><input id="day"  name="day" type="date"><input style="display:none;" value="<?php echo $_GET['user'] ; ?>" name="user" type="text">  <!-- erreur -> modification du lien utlilise le lien du cite -->
  <br/> <button type="submit" > OK </button>
</form>




<?php
if (isset($_SESSION['user']) && isset($_GET['user']) && isset($_GET['day']) ) {
echo '<form  method="get" action="confirmrdv.php" > ';
echo '<input style="display:none;" value="'.$_GET['user'].'" name="user" type="text">' ;
  $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");

  $check = "select * from rdv where  date(date)='".$_GET['day']."' and puser='".$_SESSION['user']."' ";
  if (mysqli_num_rows($conn->query($check)) !=0) {
    echo '<span  align="center" style="font-size:30px;"> vous avez deja un rendez vous dans cette journee , reesseyer svp :) </span>';
    exit();
  }


  $dated = new DateTime($_GET['day'].'T08:00:00'); // temp de debut de la journee
  $datef = new DateTime($_GET['day'].'T16:00:00'); // temp de fin de la journee
$i =0;



  while ($dated <= $datef ){

    $sql = " SELECT * from rdv where (duser='".$_GET['user']."')  AND  (date='".$dated->format('Y-m-d H:i')."')";
    $row = $conn->query($sql);
    $n = mysqli_num_rows($row);

    if ( $n== 0 ){
    echo '<div > <label ><input  name="rdv" type="radio" value="'.$dated->format('Y-m-d H:i').'">&nbsp;&nbsp;&nbsp;&nbsp;'.$dated->format('Y-m-d H:i').'</label></div  >';
    $i++;
}


    $dated->add(new DateInterval('PT15M'));
  }

  echo '<button type="submit" > Confirmer le rendez vous </button>';

}
?>

</form>
