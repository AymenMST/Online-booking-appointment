<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="\custom-reg.css">

</head>
<body >
  <?php
  include 'nav.php';

  if(isset($_SESSION['user'])){ // utilisateur est deja connect alors redirect vers la page d acceuille
    $url = 'index.php';
    echo"<script>window.location = '$url';</script>";
    exit();
  }
?>
<script>
function labeledit(){
  u = document.getElementById("type").value;
  if (u==1)
  document.getElementById("userlab").innerHTML ="num id national";
  else if(u==2)
  document.getElementById("userlab").innerHTML ="user";

}
</script>
<form class="regForm" method="post" action="\authentification.php">

<table >

  <tr>
  <td> <label for="type">vous etes :</label></td><td> <select onchange="labeledit()" id="type" name="type">            <option  value="1">patient</option>
                                                                                        <option selected value="2">medcin</option>
                                                       </select>   </td>
  </tr>
  <tr> <td><br/></td><td></td> </tr>

  <tr>

   <td> <label id="userlab" for="user"><b>username&nbsp;:</b></label> </td><td> <input type=text minlength="4" required maxlength="15" type="text" name="user" >
<td rowspan="2"> <button type="submit">Log-in</button> </td>

   </tr>
<tr> <td><br/></td><td></td> </tr>
<tr>
<td> <label for="pass">mot&nbsp;de&nbsp;pass:&nbsp;</label></td><td>   <input required  type="password" minlength="6" maxlength="20" name="pass"></td>
</tr>

</table>
</form>
</body>
</html>
