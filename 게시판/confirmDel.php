<?php
    include "lib.php";
    include "css/style.css";


    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx);


?>


<form action="del.php" method="post">
    <input type="hidden" name="idx" value="<?=$idx?>">
    <!--<table width=800 border="1" cellpadding=5 >-->


      <div class="board_wrap">
        <div class="board_title">
            <strong>게시판</strong>
            <p>자신의 결과를 공유해 보세요!</p>
        </div>
        <div class="board_write_wrap">
            <div class="board_write">
                <div class="title">
                    <colspan=2> <?=$idx?>번 게시물을 정말 삭제할까요? </th>
                </div>
                <div class="info">
                    <dl>
                        <dt>비밀번호</dt>
                        <dd><input type="password" name="pwd" placeholder="비밀번호"  size=20 ></dd>
                    </dl>

                </div>

            </div>
            <div class="bt_wrap">
              <input type="submit" value="저장">
              <a href="list.php">취소</a>
            </div>
        </div>
    </div>
    </table>
</form>
