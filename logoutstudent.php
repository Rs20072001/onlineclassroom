<?php
session_start();
?>
<?php
$_SESSION["sidx"]=="";
session_destroy();
header('Location:index');
?>