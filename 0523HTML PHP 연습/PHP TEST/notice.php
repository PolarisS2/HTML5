<?php
include('common.php');
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$pw = $_POST['pw'];


$URL = './login.html';   

$sql_insert = "INSERT INTO memberTest (id,title,content,pw)VALUES ('$id','$title','$content','$pw')";



$push=mysqli_query($mysqli, $sql_insert);
if($push){
    echo "작성 완료";
    echo "<br><br>";
    echo "<a href=main.php>메인으로</a>;";
    echo "<br><br>";
    echo "<a href=notice.html>글쓰기</a>";
}

?>