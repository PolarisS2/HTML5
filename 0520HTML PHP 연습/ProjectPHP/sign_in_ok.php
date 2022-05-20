<?php 
include('common.php');


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select no, email, password from member
where email = '$email'";

$result = $conn -> query($sql);

$db_pw = mysqli_fetch_assoc($result);

//이메일이 존재한다면
if($db_pw){
    //입력 pw== dbpw이면
    if($password == $db_pw['password']){
    //세션에 값을 저장한다.
    $_SESSION['no'] = $db_pw['no'];
    $_SESSION['pw'] = $db_pw['password'];
    $_SESSION['email'] = $db_pw['email'];
    
    echo"
    <script>
    location.href='index.php'
    </script>
    ";

    //입력 pw== dbpw 아니면
    }else{
        echo"
        <script>
        alert('비밀번호가 다릅니다');
        history.back()
        </script>
        ";
    }
}
    else{
        echo"
        <script>
        history.back()
        </script>
        ";
    }
    

?>