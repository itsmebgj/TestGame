<?php
    include "lib.php";
    include "css/style.css";

    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx);

    $query = "select * from list where idx='$idx' ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);

?>


<form action="writePost.php" method="post">
    <!--<table width=800 border="1" cellpadding=5 >-->


      <div class="board_wrap">
        <div class="board_title">
            <strong>게시판</strong>
            <p>자신의 결과를 공유해 보세요!</p>
        </div>
        <div class="board_view_wrap">
            <div class="board_view">
                <div class="title">
                    <?=$data['subject']?>
                </div>
                <div class="info">
                    <dl>
                        <dt>글쓴이</dt>
                        <dd><?=$data['name']?></dd>
                    </dl>

                </div>
                <div class="cont">
                    <?=nl2br($data['memo'])?>
                </div>
            </div>
            <div class="bt_wrap">
                <a href="list.php" class="on">목록</a>
                <a href="write.php?idx=<?=$idx?>" class="off">수정</a>
                <a href="confirmDel.php?idx=<?=$idx?>">삭제</a>
            </div>
        </div>
    </div>
    </table>
</form>
