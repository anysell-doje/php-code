<?php
include '../connection.php';

$userEmail = $_POST['user_email'];
$userPW = $_POST['user_pw'];
$userName = $_POST['user_name'];
$userTel = md5($_POST['user_tel']);

$sqlQuery = "INSERT INTO hotel_member_list SET user_email = '$userEmail', user_pw = '$userPW', user_name = '$userName', user_tel = '$userPW'";

$resultQuery = $connection -> query($sqlQuery);

if($resultQuery -> num_rows > 0) { // 같은 이메일이 있으면 에러 메세지를 출력
    echo json_encode(array("success" => true));
}else{
    echo json_encode(array("success" => false));
}