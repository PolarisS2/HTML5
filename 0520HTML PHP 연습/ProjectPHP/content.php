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

<div style="margin: 10%; border: 1px solid;">

제목
<p><?php echo $data['title']?></p>
내용
<pre><?php echo $data['content']?></pre>
작성자
<p><?php echo $data['writer']?></p>
작성시간
<p><?php echo $data['insertTime']?></p>
<?php
if($data['writer'] == $_SESSION['email']){ ?>}

<button onclick="updateContent()">수정</button>
<button onclick="deleteContent()">삭제</button>
<?php } ?>
</div>

<script>

function updateContent(){
    location.href='update_content.php?no=' + <?php echo $no?>;
}

function deleteContent(){
    location.href='delete_content.php?no=' + <?php echo $no?>;
    
}

</script>