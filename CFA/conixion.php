<?php 
    try {
        $con = new PDO("mysql:host=localhost;dbname=eclasse", "localhost", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
       catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
?>