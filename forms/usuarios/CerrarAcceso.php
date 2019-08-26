<?php
SESSION_START();
session_destroy();
echo "<script>window.top.location.replace('index.php');</script>" ;
?>
