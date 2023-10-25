<?php

header("Access-Control-Allow-Methods: POST");
include("../config/user_config.php");
$config = new user_Config();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $res = $config->insert($name,$email,$password);

    if($res){
        $arr['data'] = "user created successfully....";
    }else{
        $arr['data'] = "user createtion Failed.....";
    }

}else{
    $arr['error'] = "only psot HTTP method is allowed.....";
}

echo json_encode($arr);

?>