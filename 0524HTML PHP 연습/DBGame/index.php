<?php
include("common.php");

if($_SESSION){
    echo "
    <script>
    alert('로그인 완료');
    </script>
    ";
    echo "
    <script>
        location.href='game_ok.php';
    </script>
    ";
}else{
    echo "
    <script>
    location.href='sign_in.php';
    </script>";
}

$sql = " select
            no,
            id,
            pw
            ";

$result = $conn ->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center;">
        location
    </div>
</body>
</html>