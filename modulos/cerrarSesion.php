<?php
    session_start();
    session_unset();
    session_destroy();
    
    header('../inicio_sesion.php');


?>