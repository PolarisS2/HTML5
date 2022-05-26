<?php
// include('common.php');
$host = "localhost";
$user = "root";
$db = "test";
$conn = mysqli_connect($host, $user, null, $db);
$id = $_SESSION['id'];
$sql = "select
        no,
        id,
        pw,
        score
        from endtalk
        where id = '$id'
        ";

$result = $conn ->query($sql);

$data = mysqli_fetch_assoc($result);



?>

