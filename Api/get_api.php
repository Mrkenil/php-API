<?php

header("Access-Control-Allow-Methods: POST");
include("../config/config.php");
$config = new Config();

$res = $config->connect();


if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $res = $config->select();

    $all_data = [];

    while ($recode = mysqli_fetch_assoc($res)) {
        array_push($all_data,$recode);
    }

    $arr['data'] = $all_data;

}else{
    $arr[error] = "Select GET HTTP Method......";
}

echo json_encode($arr);

?>