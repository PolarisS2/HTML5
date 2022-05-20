<?php
include('common.php');

$no = $_GET['no'];

$sql = "select 
title, 
content, 
writer,
insertTime 
from board
where no = '$no'";  //쿼리실행

$result = $conn ->query($sql); //쿼리데이터 저장

$data=mysqli_fetch_assoc($result);
if($data ){
    //데이터가있을때

}else{
    //데이터가 없을떄

    echo "
    <script>
    alert('비정상 접근');
    location.href='index.php';
    </script>
    ";
}

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


    <div style="background-color: black; padding:30px; color:white; text-align:center">
        글 수정
    </div>

<form action="update_content_ok.php" method="post">
<div style="margin: 10%;">
    <div style="padding: 2%;">
        <label for="title">제목</label>
        <input id="title" name="title" value="<?php echo $data['title']?>" type="text" width="50%">
    </div>

    <div style="padding: 2%; width: 100%; height: 300px;">
        <p for="content">내용</p>
        <textarea value="<?php echo $data['content']?>" id="content" name="content" style="width: 50%; height: 50%;"></textarea>
    </div>
<div style="padding: 2%;">
    <button>수정완료</button>
</div>
</form>
</div>


    
</body>
</html>