<?php
session_start();

$host = "localhost";
$user = "root";
$db = "test";

$conn = mysqli_connect($host, $user, null, $db);


?>

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">끝말잇기</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <b><?php echo $_SESSION['id'] . "님 환영합니다."?></b>
        
        <button class="btn btn-outline-success" type="submit" onclick="myInfoUpdate()" style="margin: 0px 10px 0px 10px; float: right;">정보수정</button>
        <button class="btn btn-outline-success" type="submit" onclick="logout()" style = "float: right;">로그아웃</button>
      </form>
    </div>
  </div>
</nav>