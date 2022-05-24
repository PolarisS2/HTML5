<?php

include ("common.php");
include ("./view/game.html");
$no = $_GET['no'];

$sql = "select no,id,pw, score
        from endtalk
        where no='$no'
        ";

$result = $conn -> query($sql);
// print_r($result);
$data = mysqli_fetch_assoc($result);

?>


<div style="text-align:center;">
        <b1>내 점수 : 
            <?php echo $data['score'];?>
        </b1>
</div>