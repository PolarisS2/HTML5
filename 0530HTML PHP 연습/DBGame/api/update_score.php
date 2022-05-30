<?php 
// include('../common.php');
$host = "localhost";
$user = "root";
$db   = "test";

$conn = mysqli_connect($host, $user, null, $db);

$id = $_GET['id'];

$score = $_GET['score'];



$sql = "update endtalk set
        score = score + $score
        where id = '$id'";

$result = $conn -> query($sql);

$sql_score = "select 
                score
                from endtalk
                where id = '$id'";
$result_score = $conn -> query($sql_score);
$data = mysqli_fetch_assoc($result_score);
$scoreValue = $data['score'];
if($data) {
    // 중복    
    echo json_encode(array('result' => $scoreValue));
} else {
    // 중복이 아니다
    echo json_encode(array('result' => 'n'));
}

?>