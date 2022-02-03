<?php
 $db_connect = new mysqli("localhost", "root", "", "gitclass");
      if ($db_connect->connect_error) {
        die("Could nt connect to the databse: ". $conn->connect_error);
        }
?>        