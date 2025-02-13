<?php
    header('Content-Type: application/json');
    require '../config.php';
    require '../functions.php';


    if(!validateUserData($_POST)){
        $message=array("message"=>"incorrect data");
        echo json_encode($message);
        return;
    }
    $email=$_POST['email'];
    $password=$_POST['password'];
    $login=$_POST['login'];


    $conn = getDBConnection();
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $conn->prepare("INSERT INTO users (login, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $login, $hashedPassword, $email);

    if ($stmt->execute()) {
        $message=array("message"=>"User created successfully");
        echo json_encode($message);
        return;
    } 
    else {
        $message=array("message"=>"Failed to create user");
        echo json_encode($message);
        return;
    }