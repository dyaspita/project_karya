<?php
session_start(); //untuk mulai sesi ya      
session_unset(); //ni hps sesi       
session_destroy(); //hapus secara keseluruhan 

header("Location:../public/login.php"); 
exit;
