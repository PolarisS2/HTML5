<?php
include("common.php");
include("./view/game_ok.html");
include('score.php');


?>

<html>
    <style>
        .turn{
            text-align: center;
        }
    </style>
<div class="turn" onkeyup="turn()">
<b id="turn"></b>




</div>

<b><?php echo $_SESSION['id'] . "님이 입장하셨습니다."?></b>

<div style="text-align:center;">
내점수 : <b1 id="point"> </b1>
</div>
<!-- 내 점수 : <?php echo $data['score'];?> -->

</html>

<script>
//---------------------------턴------------------------------------------------    
var score = 0;
var count = 0;
var userID = '<?php echo $_SESSION['id']; ?>';
var UserScore = <?php echo $_SESSION['no']; ?>;
if(count==0){
            document.querySelector('#turn').innerHTML = "내 차례";
            count = count+1;   
            // score = score + 1
            postScore(score);
            console.log('if==0');
            console.log(count);
            console.log(score);

        }
        else{
            document.querySelector('#turn').innerHTML = "상대방 차례";
            count = count-1;
            // score = score + 1
            postScore(score);
            console.log('if==1');
            console.log(count);
            console.log(score);
        }
//---------------------------턴------------------------------------------------    
function postScore() {
        var http = new XMLHttpRequest();
            http.onreadystatechange = function () {
                if(this.status == 200 && this.readyState == this.DONE) {                            
                    console.log(http.response);
                    if(JSON.parse(http.response)['result'] != 'n'){
                        // 좋아요 갯수 최신화
                        document.querySelector('#point').innerText 
                        = JSON.parse(http.response)['result'];
                    } else {
                        alert('실패');
                    }
                }            
            }            
            
            var url = "http://localhost/클론코딩/DBGame/api/update_score.php?id=" + userID  + "&&score=" + score;
            console.log(url);
            http.open('GET', url);
            http.send();
    }
</script>
