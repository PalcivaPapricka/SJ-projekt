<?php
session_start();
session_destroy();

header("Location: loggedout.php");
exit;
?>
