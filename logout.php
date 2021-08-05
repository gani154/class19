<?php
 session_start();

 unset($_SESSION['is_access']);

 header("Location: login.php");

?>