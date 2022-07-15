<?php
include("common.php");
// include("./view/main.html");
if ($_SESSION) {
    echo $_SESSION['id'] . "님 환영합니다.";
} else {
    echo "
    <script>
    
        location.href='sign_in.php';
    </script>
    ";
}
$no = $_POST['no'];
$sql = "select
            no,
            title,
            creater,
            day,
            view
        from border
        where no = '$no'";

$result = $conn -> query($sql);
$data = mysqli_fetch_assoc($result);

if($data) {
        
}
//  else {    
//     echo "
//     <script>
//         alert('비정상 접근')
//         location.href='index.php';        
//     </script>
//     ";
// }

?>
<html>
<style>
    *{
        margin: 0 auto;
        /* margin-top: 40px; */
        text-align: center;
    }
    #title{
        width: 500px;
        height: 40px;
        margin-bottom: 20px;

    }
    #text{
        width: 500px;
        height: 300px;
    }
    label{
        
    }
    #container{
        text-align: center;
    }

</style>
<body>
    <div>

    </div>
<table>
        <tr>
            <td id="no">번호</td>
            <td id="title">제목</td>
            <p>
    <?php echo $data['title'];?>
    </p>
            <td id="creater">작성자</td>
            <td id="day">날짜</td>
            <td id="view">조회수</td>
        </tr>

    </table>

    <div class = text>
        <button onClick="location.href='write.php'">글쓰기</button>
    </div>
</body>
</html>


