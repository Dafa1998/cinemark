<?php
SESSION_START();
if(!isset($_SESSION['Cine_IdUser'])){
  header('Location: login.php');
}

?>
