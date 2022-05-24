<?php
include('common.php');

$id = $_POST['id'];
$pw = $_POST['pw'];
$cpw = $_POST['cpw'];
$email = $_POST['email'];
$number = $_POST['number'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$location = $_POST['location'];

if($id == NULL || $pw == NULL || $cpw == NULL || $email == NULL || $number == NULL || $name == NULL || $sex == NULL || $location == NULL){
    echo "빈칸을 모두 채워주세요";
    echo "<a href=signup.html>뒤로가기</a>";
    exit();
}
$check="SELECT * from memberTest WHERE id='$id'";
$result = $mysqli->query($check);
if($result->num_rows==1)
{
    echo "중복된 id입니다";
    echo "<a href=signup.html>뒤로가기</a>";
    exit();
}


$sql_insert = "INSERT INTO memberTest (id,pw,email,number,name,sex,location)
VALUES('$id','$pw','$email','$number','name','sex','location');";
echo $sql_insert;
$signup=mysqli_query($mysqli, $sql_insert);
if($signup){
    echo "회원가입 완료";
}
?>


