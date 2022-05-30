<?php

include ("common.php");
include ("./view/game.html");
$no = $_POST['no'];

$sql = "select no,id,pw, score
        from endtalk
        where no='$no'
        ";

// $result = $conn -> query($sql);
// // print_r($result);
// $data = mysqli_fetch_assoc($result);
// $score = $data['score'];
// $_SESSION['score'] = $score;
?>


