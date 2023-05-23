<?php
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db_user";
   $db = new PDO('mysql:dbname='.$dbname.';host='.$hostname, $username, $password);
?>
