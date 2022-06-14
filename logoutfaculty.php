<?php
session_start();
?>
<?php
$_SESSION["fidx"]=="";
session_destroy();
header('Location:index.php');
?>