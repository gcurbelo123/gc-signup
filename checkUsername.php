<?php
    include '../dbConnection.php';
    
    $conn = getDatabaseConnection("lab8");
    
    $username = $_GET['username'];
    
    //next query allows SQL injection!
    $sql = "SELECT * FROM lab8_user WHERE username = :username ";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":username"=>$username));
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // print_r($record);
    echo json_encode($record);
    //return $record;
?>