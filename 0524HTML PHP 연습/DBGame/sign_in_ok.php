<?php 
include('common.php');

// $no = $_POST['no'];
$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "select no, id, pw from endtalk
where id = '$id'";

$result = $conn -> query($sql);

$db_pw = mysqli_fetch_assoc($result);


if($db_pw){
    //입력 pw== dbpw이면
    if($pw == $db_pw['pw']){
    
    $_SESSION['no'] = $db_pw['no'];
    $_SESSION['pw'] = $db_pw['pw'];
    $_SESSION['id'] = $db_pw['id'];
    
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