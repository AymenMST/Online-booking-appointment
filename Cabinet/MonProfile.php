<?php
include 'nav.php';
if ( (isset($_SESSION['type'])) && (isset($_SESSION['type']))  ) {

if ( $_SESSION['type'] == 2)
include 'MonProfileDoc.php';
else
include 'MonProfilePat.php';

}
?>
