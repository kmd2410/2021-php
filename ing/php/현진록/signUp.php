<?php
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $pwc = $_POST['pwc'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if ($pw != $pwc){
        echo "비밀번호와 비밀번호 확인이 서로 다릅니다.";
        echo "<a href=singUp.html>back page</a>";
        exit();
    } //비밀번호 재확인

    if ($id == NULL || $pw == NULL || $name == NULL || $email == NULL){
        echo "빈 칸을 모두 채워주세요";
        echo "<a href=signUp.html>back page</a>";
        exit();
    } //회원정보 빈 칸 (공백입력)

    $mysqli = mysqli_connect("localhost", "root", "123456", "user_info");

    $check = "SELECT * from user_info WHERE userid = '$id'";
    $result = $mysqli -> query($check);

    if($result -> num_rows == 1){
        echo "중복된 ID입니다.";
        echo "<a href=signUp.html>back page</a>";
        exit();
    } //아이디 중복

    $signup = mysqli_query ($mysqli, "INSERT INTO info (userid, userpw, name, email)
    VALUES ('$id', '$pw', '$name', '$email')");

    if ($signup) {
        // echo "sign up success";
        header('Location:./login.html');
    }

    // 회원 가입후 login.html에서 로그인 성공시 login_check.php로 이동
?>