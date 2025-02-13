<?php
    header('Content-Type: application/json');
    require '../config.php';
    require '../functions.php';


    if(!validateID($_POST)){
        $message=array("message"=>"incorrect id");
        echo json_encode($message);
        return;
    }

    if(!validateUserData($_POST)){
        $message=array("message"=>"incorrect data");
        echo json_encode($message);
        return;
    }


    $email=$_POST['email'];
    $password=$_POST['password'];
    $login=$_POST['login'];
    $id=$_POST['id'];



    $conn = getDBConnection();
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $conn->prepare("UPDATE users SET login = ?, password = ?, email = ? WHERE id = ?");
    $stmt->bind_param("sssi", $login, $hashedPassword, $email, $id);

    if ($stmt->execute()) {
        $message=array("message"=>"User updated successfully");
        echo json_encode($message);
        return;
    } 
    else {
        $message=array("message"=>"Failed to update user");
        echo json_encode($message);
        return;
    }