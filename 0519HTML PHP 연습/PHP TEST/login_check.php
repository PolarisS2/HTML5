<?php

use function PHPSTORM_META\elementType;

    session_start();
    include('common.php');
    $id=$_POST['id'];
    $pw=$_POST['pw'];

    $check = "SELECT * FROM memberTest WHERE id='$id'";
    $result=$mysqli->query($check);

    if($result->num_rows==1)
    {
        $row=$result->fetch_array(MYSQLI_ASSOC);
        if($row['pw']==$pw)
    {
            $_SESSION['id']=$id;
            if(isset($_SESSION['id']))
    {
            
            header('Location: ./main.php');
        }
        else
    {
            echo "세션 저장 실패";
        }
        
        }
        else
    {
        echo "잘못된 아이디 혹은 패스워드입니다";
    }
        }
        else
    {
    echo "잘못된 아이디 혹은 패스워드입니다.";
        }


?>
