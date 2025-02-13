<?php 
    function getDBConnection():mysqli {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    function validateUserData(array $params):bool {
        $passwordPattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/';


        $setCheck=isset($params['login'], $params['password'], $params['email']) ;
        $emailCheck=filter_var($params['email'], FILTER_VALIDATE_EMAIL);
        $passwordCheck=preg_match($passwordPattern, $params['password']);
        $lengthCheck=strlen($params['login'])>4 &&  strlen($params['password'])>5 && strlen($params['email'])>2;


        return $setCheck && $emailCheck && $passwordCheck && $lengthCheck;
    }
    function validateID(array $params):bool {

        return isset($params['id']) && is_numeric($params['id']) ;
        
    }