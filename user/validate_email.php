<?php
include '../connection.php';

$userEmail = $_POST['user_email'];

$sqlQuery = "SELECT * FROM WHERE user_email = '$userEmail'";

$resultQuery = $connection -> query($sqlQuery);

if($resultQuery -> num_rows > 0) { // 같은 이메일이 있으면 에러 메세지를 출력
    echo json_encode(array("exist Email!!" => true));
}else{
    echo json_encode(array("exist Email!!" => false));
}