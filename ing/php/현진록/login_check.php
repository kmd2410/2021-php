<?php  
    header('Content-Type: text/html; charset=utf-8');
    error_reporting(E_ALL);
    ini_set("display_errors",1);

    session_start();
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $mysqli = mysqli_connect("localhost", "root", "123456", "user_info");

    echo $id;
    echo $pw;

    $check = "SELECT * FROM info WHERE userid = '$id' ";
    $result = $mysqli->query($check);
    if ($result->num_rows == 1){
        $row = $result->fetch_array(MYSQLI_ASSOC); //하나의 열을 배열로 가져오기
        if ($row['userpw'] == $pw){ //MYSQLI_ASSOC 필드명으로 첨자 가능
            $_SESSION['userid'] = $id; //로그인 성공시 세션 변수 만들기
            if (isset($_SESSION['userid'])) //세션 변수가 참일때
            {  
                header('Location:./main.php'); //로그인 성공시 페이지 이동 
            }
            else {
                echo "세션 저장 실패";
            }
        }
        else {
            echo "wrong id or pw";
        }
    }
    else {
        echo "wrong id or pw";
    }

    //로그인 성공시 세션 변수 생성 후 main.php이동
    //main.php에서 로그인 성공했을때 로그아웃 링크가 생성된다.
?>