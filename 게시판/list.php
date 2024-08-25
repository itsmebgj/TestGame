<?php
    include "lib.php";
    include "css/style.css";

?>


    <!-- Navigation-->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">

            <li class="sidebar-brand"><a href="#">MENU</a></li>
            <li class="sidebar-nav-item"><a href="../login/join.php">Create Account</a></li>
            <li class="sidebar-nav-item"><a href="../login/login.php">Login</a></li>
            <li class="sidebar-nav-item"><a href="../index.html">Home</a></li>
            <li class="sidebar-nav-item"><a href="../index.html">Main test</a></li>
            <li class="sidebar-nav-item"><a href="list.php">Community</a></li>

        </ul>
    </nav>

<!--<table width=800 border="1" >-->

  <div class="board_wrap">
        <div class="board_title">
            <strong>게시판</strong>
            <p>자신의 결과를 공유해 보세요!</p>
        </div>

        <div class="board_list_wrap">
            <div class="board_list">
                <div class="top">
                  <div class="num">번호</div>
                    <div class="title">제목</div>
                    <div class="writer">글쓴이</div>
                    <div class="date">작성일</div>
                </div>

<?php

    $query = "select * from list order by idx desc ";
    $result = mysqli_query($connect, $query);

    while($data = mysqli_fetch_array($result)){
?>
    <div>
        <div class="num"> <?=$data['idx']?> </div>
        <div class="title"> <a href="view.php?idx=<?=$data['idx']?>"><?=$data['subject']?></a> </div>
        <div class="writer"> <?=$data['name']?> </div>
        <div class="date"> <?=substr($data['regdate'],0,10)?> </div>
    </div>
<?php } ?>

<div class="bt_wrap">
  <a href="write.php">글쓰기</a>
</div>
<script src="js/scripts.js"></script>
</table>
</div>
</div>
</div>
