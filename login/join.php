<!DOCTYPE html>
<html lang="ko">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>회원가입</title>
    <style>
        .text-right{text-align:right; }
    </style>
    <script>
        function chkFrm(){
            var id = document.getElementById("user_id").value;
            var pwd = document.getElementById("pwd").value;
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            if(id==""){
                alert('아이디를 입력해주세요.');
                document.getElementById("id").focus();
                return false;
            }
            else if(pwd==""){
                alert('비밀번호를 입력해주세요.');
                document.getElementById("pwd").focus();
                return false;
            }else if(name==""){
                alert('이름을 입력해주세요.');
                document.getElementById("name").focus();
                return false;
            }else if(email==""){
                alert('이메일을 입력해주세요.');
                document.getElementById("email").focus();
                return false;
            }

            return true;
        }
    </script>
    
</head>
<body>
    <form action="joinProc.php" method="post" onsubmit="return chkFrm();">
    <div class="form signup">
        <div class="form-header">
            <div class="show-signup">회원가입</div>
        </div>
        <div class="form-elements">
            <div class="form-element">
                <input type="text" name="user_id"  id="user_id" placeholder="아이디">  
            </div>
            <div class="form-element">
                <input type="password" name="pwd" id="pwd" placeholder="비밀번호">
            </div>
            <div class="form-element"> 
                <input type="text" name="name" id="name" placeholder="이름">
            </div>
            <div class="form-element">
                <input type="text" name="email" id="email" placeholder="이메일">
            </div>
            <div class="form-element">
                <button type="submit">회원가입</button>
            </div>
        </div>
    </div>
</form>

</body>
</html>
