<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ./login.html');
}
echo "홈(로그인 성공)";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<a href= noticeboard.php>게시판으로 이동</a>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<a href = notice.html>게시판 글쓰기</a>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<a href = logout.php>로그아웃</a>";

?>