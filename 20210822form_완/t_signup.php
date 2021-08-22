<?
    $mysqli = mysqli_connect("localhost", "kmd2410", "a135790!", "kmd2410") or die ("Unable to connect to SQL server");

    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $pwc = $_POST["pwc"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    if ($pw != $pwc){
        echo "비밀번호와 비밀번호 확인이 다릅니다.";
        echo "<a href=t_sign.php>뒤로가기</a>";
        exit();
    }

    $check = "SELECT * FROM 20210822_user WHERE userid = '$id'";
    $check_r = $mysqli->query($check);

    if ($check_r->num_rows > 0){
        // echo "중복된 아이디가 존재합니다.";
        // echo "<a href=t_sign.php>뒤로가기</a>";
        // exit();

        echo "<script language=javascript> alert('중복된 아이디가 존재합니다.'); history.back(-1);</script>";
        exit();
    }

    $signup_r = "INSERT INTO 20210822_user (userid,userpw,name,email) VALUES ('$id','$pw','$name','$email')";
    // $signup = mysqli_query($mysqli, $signup_r);
    $signup = $mysqli->query($signup_r);

    // $signup = mysqli_query ($mysqli, "INSERT INTO 20210822_user (userid, userpw, name, email)
    // VALUES ('$id', '$pw', '$name', '$email')");

    if ($signup){
        echo "<script language=javascript> alert('회원가입 성공'); </script>";
        header ("Location:./t_index.php");
        exit();
    } else {
        echo "<script language=javascript> alert('회원가입 실패'); history.back(-1);</script>";
    }
?>