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
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $message=array("message"=>"User deleted");
        echo json_encode($message);
        return;
    } 
    else {
        $message=array("message"=>"Failed to delete user");
        echo json_encode($message);
        return;
    }
