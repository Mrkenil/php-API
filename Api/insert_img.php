<?php

header("Access-Control-Allow-Methods: POST");
include("../config/user_config.php");
$config = new user_Config();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_FILES['fname']['name'];
    $path = $_FILES['fname']['tmp_name'];

    $destination = "../uploads/".$name;
    $isuploaded = move_uploaded_file($path,$destination);

    if($isuploaded){
        $res = $config->insert_image($name,$path);

    if($isuploaded){
        $arr['data'] = "Success";
    }else{
        $arr['data'] = "Failure";
    }
    }else{
        $arr['error'] = "Uploadation failed....";
    }

}else{
    $arr['error'] = "only psot HTTP method is allowed.....";
}

echo json_encode($arr);

?>