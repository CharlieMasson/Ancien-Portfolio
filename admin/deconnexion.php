
<?php 

    session_start();
    session_destroy();
    //setcookie('connect');
    session_abort();
    header("location: ../index.php");

?>
