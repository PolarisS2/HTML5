<?php
// header('Content-Type: text/html; charset=UTF-8');


include('../common.php');

$email = $_GET['email']; //이메일 받기

$sql = "select email from member where email = '$email'";  //쿼리실행

$result = $conn ->query($sql); //쿼리데이터 저장

$data=mysqli_fetch_assoc($result);
if($data ){
    //중복
    echo json_encode(array('result' => 'y'));

}else{
    //중복아님
    echo json_encode(array('result' => 'n'));




}




?>