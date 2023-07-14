<?php
include 'nav.php';
?>
<!DOCTYPE html>
<html>
<head>


  <title>chercher des medcins </title>
  <link rel="stylesheet" href="\listecss.css">

</head>
<body>
<?php
if ($_SESSION['type'] == 2 )
  exit();



  if (  (isset($_GET['diplome']) && isset($_GET['spec']) && isset($_GET['wilaya']) )    ) {
    $conn = new mysqli("localhost", "id1811609_root", "aymen","id1811609_my_db");

    if (0==$_GET['diplome'])
    $d= " 1";
    else
     $d = " diplome='".$_GET['diplome']."' ";


    if (0==$_GET['spec'])
    $s= " AND 1";
    else $s = " AND spec='".$_GET['spec']."' ";


    if (0==$_GET['wilaya'])
    $w= " AND 1";
    else $w = " AND wilaya='".$_GET['wilaya']."' ";



      $sql ="SELECT * FROM doc WHERE ".$d.$s.$w;

      $resultat=$conn->query($sql);


    ?>

    <table border="1" width="50%" align="center">
    <?php

    $i=0;
    while($medcin  = $resultat->fetch_assoc() )

    {
    $i++;



    switch ($medcin['spec']) {
    case "1" :$medcin['spec']="ORL Tête et cou";
    break ;
    case"2":$medcin['spec']="Orthopédie et Rachis";
    break ;
    case"3":$medcin['spec']="Ophtalmologie";
    break ;
    case"5":$medcin['spec']="Chirurgie Dentaire" ;
    break ;
    case"4":$medcin['spec']="Chirurgie Plastique";
    break ;
    case"6":$medcin['spec']="Pneumologie ";
    break ;
    case"7":$medcin['spec']="Cardiologie";
    break ;
    case"8":$medcin['spec']="Gastro-Entérologie";
    break ;
    case"9":$medcin['spec']="Anesthésie";
    break ;
    }


    switch ($medcin['diplome']) {
    case"1":$medcin['diplome']="généraliste";
              break;
    case"2":$medcin['diplome']="specialiste";
              break;
    case"3":$medcin['diplome']="Maitre-assistant";
              break;
    case"4":$medcin['diplome']="Professeur";
              break;
    }




  ?>



<tr><th colspan="2" ><a href="\profile.php?user=<?php echo $medcin['user'] ;?>"> Medcin <?php echo "$i: "; ?> </a></th> </tr>

<tr> <td width="30%"> nom: </td>     <td> <?php echo $medcin['nom']; ?>  </td></tr>
<tr> <td width="30%"> adress: </td>     <td> <?php echo $medcin['adress']; ?>  </td></tr>
<tr> <td width="30%"> wilaya: </td>     <td> <?php echo $medcin['wilaya']; ?>  </td></tr>
<tr> <td width="30%"> tel: </td>     <td> <?php echo $medcin['tel']; ?>  </td></tr>
<tr> <td width="30%"> email: </td>     <td> <?php echo $medcin['email']; ?>  </td></tr>
<tr> <td width="30%"> spec: </td>     <td> <?php echo $medcin['spec']; ?>  </td></tr>
<tr> <td width="30%"> diplome: </td>     <td> <?php echo $medcin['diplome']; ?>  </td></tr>
<?php   }

} else  {   // else of  if (isset)


echo '<script> window.location="index.php"</script>';
exit();
  }  ?>
</table>


</body>
</html>
