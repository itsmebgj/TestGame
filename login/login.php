<!DOCTYPE html>
<html lang="ko">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script>
        function chkFrm(){
            var id = document.getElementById("user_id").value;
            var pwd = document.getElementById("pwd").value;
            if(id==""){
                alert('아이디를 입력해주세요.');
                document.getElementById("id").focus();
                return false;
            }
            else if(pwd==""){
                alert('비밀번호를 입력해주세요.');
                document.getElementById("pwd").focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form action="loginProc.php" method="post" onsubmit="return chkFrm();" > 
    <div class="form signin">
        <div class="form-header">
            <div class="show-signin">로그인</div>
        </div>
        <div class="form-elements">
            <div class = "form-element">
                <input type="text" name="user_id"  id="user_id" placeholder="아이디">  
            </div>
            <div class = "form-element">
                <input type="password" name="pwd" id="pwd" placeholder="비밀번호">  
            </div>
            <div class="form-element">
                <button type="submit">로그인</button>
            </div>
        </div>
    </div>
    </form>
</body>
</html>