<?php
include('common.php');


$no = $_GET['no'];
print_r('no');


?>

<div>
        <table>

            <thead>
                <tr>
                    <th>구분</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>시간</th>
                </tr>
            </thead>


            <!-- <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php  echo $row['no']?></td>
                    <td>
                        <a href="content.php?no=<?php echo $row['no']?>">
                        <?php  echo $row['title']?>
                        </a>
                        
                    </td>
                    <td><?php  echo $row['writer']?></td>
                    <td><?php  echo $row['insertTime']?></td>
                </tr>
                <?php }?>
            </tbody> -->
        </table>
    </div>