<?php

header("Access-Control-Allow-Methods: POST");
include("../config/config.php");
$config = new Config();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $grid = $_POST['grid'];

    $res = $config->insert($name,$grid);

    if($res){
        $arr['data'] = "Record Inserted successfully....";
    }else{
        $arr['data'] = "Record Insertion Failed.....";
    }

}else{
    $arr['error'] = "only psot HTTP method is allowed.....";
}

echo json_encode($arr);
?>