<?php
include("common.php");
// include("./view/main.html");
if ($_SESSION) {
    echo $_SESSION['id'] . "�� ȯ���մϴ�.";
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
//         alert('������ ����')
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
            <td id="no">��ȣ</td>
            <td id="title">����</td>
            <p>
    <?php echo $data['title'];?>
    </p>
            <td id="creater">�ۼ���</td>
            <td id="day">��¥</td>
            <td id="view">��ȸ��</td>
        </tr>

    </table>

    <div class = text>
        <button onClick="location.href='write.php'">�۾���</button>
    </div>
</body>
</html>


