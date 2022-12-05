<?php 
session_start();
if (!isset($_SESSION["connect"])){
    header("Location: ../admin/index.php");
}
session_abort();
?>