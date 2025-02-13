<?php
    header('Content-Type: application/json');
    require '../config.php';
    require '../functions.php';

    if(!validateID($_GET)){
        $message=array("message"=>"incorrect id");
        echo json_encode($message);
        return;
    }
    $id=$_GET['id'];

    $conn = getDBConnection();
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
        
    } 
    else {
        $message=array("message"=>"No user with this id");
        echo json_encode($message);
        return;
    }