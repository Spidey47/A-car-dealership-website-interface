<?php
require '../sign_in/db_conn.php';
$_SESSION=[];
session_unset();
session_destroy();
header("Location: Index.php");

?>
