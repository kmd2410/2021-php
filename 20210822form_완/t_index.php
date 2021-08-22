<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./t_login.php" method="POST">
        <div>
            <label for="id">ID</label>
            <input type="text" name="id">
        </div>
        <div>
            <label for="pw">PW</label>
            <input type="password" name="pw">
        </div>
        <div class="button">
            <button type="submit">로그인</button>
        </div>
    </form>
    <button onclick="location.href='t_sign.php'">회원가입</button>
    

    <!-- 회원 정보가 등록되어 있다면 ID,PW입력한후 login_check -->
    <!-- 회원 정보가 미등록시 sign up 클릭후 회원가입 페이지 -->
</body>
</html>
