<?php
session_start();
$reset=session_destroy();
if($reset){
    header('Location: ./main.php');
}

?>