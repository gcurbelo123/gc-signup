<?php
    function getDatabaseConnection($db) {
        $host = "localhost";
        $username = "gcurbelo";
        $password = "";
        $dbname = $db; 
        
        // Create connection
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        return $dbConn; 
    }
?>