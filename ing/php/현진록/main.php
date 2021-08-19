<?
    session_start();
    if(!isset($_SESSION['userid'])){ //세션이 존재하지 않을때
        header ('Location: ./login.html');
    }

    echo "홈(로그인 성공)";

    echo "<a href = logout.php>로그아웃</a>";
    ?>
    <a href = logout.php>로그아웃</a>
    <?php 



    //세션 변수의 값이 없다면 (=로그인 상태가 아니라면) 로그인 페이지로 이동한다.
    //세션 변수가 존재한다면 로그인 성공 메시지 출력과 로그아웃 링크 생성


?>

