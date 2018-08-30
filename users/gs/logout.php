<?php
    session_start();
    unset($_SESSION['session_adminname']);
    session_destroy();

    header("location: /videostreamingportal/login.php");
?>