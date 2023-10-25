<?php

include("../config/config.php");
header("Access-Control-Allow-Methods: DELETE");

$config = new Config();

if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    $input = file_get_contents("php://input");
    parse_str($input,$_DELETE);

    $id = $_DELETE['id'];

    $res = $config->delete($id);

    if($res){
        $arr['data'] = "Record delete successfully....";
    }else{
        $arr['data'] = "Record deletetion Failed.....";
    }

}else{
    $arr['error'] = "..................";
}

echo json_encode($arr);

?>