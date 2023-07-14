<?php
include 'nav.php';
if ( isset($_SESSION['user'] ) && isset($_SESSION['type']) && isset($_GET['user'])){


            if ($_SESSION['type'] == 1){
              echo '<script>window.location="index.php" </script>';
              exit();
            }


}




?>

<style>
textarea{
  margin-top:50px ;
  margin-left: 20%;
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
</style>


<form method="post" action="confirmrap.php">
  <textarea name="rap" rows="15" cols="150">
</textarea>
<br/> <input type="text" name="patient" style="display:none;" value="<?php echo $_GET['user'] ;?>">
<button type="submit" > ajouter le rapport </button>
</form>
