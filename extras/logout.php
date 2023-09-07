<?php
    session_start();

    session_destroy();
    header("Location: /php-crash-course/sessions.php");
?>