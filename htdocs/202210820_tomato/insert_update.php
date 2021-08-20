<?
    include_once("../common.php");

    $id = $_POST['id'];
    $pv = $_POST['pv'];
    $pb = $_POST['pb'];
    $code = $_POST['code'];
    $email = $_POST['email'];

    $ids = $id.'y';

    // $sql = "INSERT INTO `taehee`(`tbw_mb_id`,`tbw_pv`,`tbw_pb`,`tbw_mb_code`,`tbw_mb_email`) VALUES('$id','$pv','$pb','$code','$email')";
    // INSERT IGNORE INTO : 중복시 실행X 
    // REPLACE INTO : 중복시 신규 삭제 새로 업뎃
    // ON DUPLICATE UPDATE : 중복시 새로운값 설정

    if(trim($id) == NULL || trim($pv) == NULL || trim($pb) == NULL || trim($code) == NULL || trim($email) == NULL){
        //echo "<script language=javascript> alert('모두 입력 해주세요'); history.back(-1);</script>";
        // echo "<a href='insert.php'>뒤로가기</a>";
        ALERT('모두 입력 해주세요.', G5_URL.'/a_taehee/insert.php');
        exit();
    }

    $sql_select = "SELECT * FROM `taehee` WHERE `tbw_mb_id`=$id ";
    // $sql_select_s = "SELECT tbw_mb_id as aa FROM `taehee` WHERE `tbw_mb_id`=$id ";
    //'".$_POST['id']."'
    // $sql_insert = "INSERT INTO `taehee`(`tbw_mb_id`,`tbw_pv`,`tbw_pb`,`tbw_mb_code`,`tbw_mb_email`) VALUES('$id','$pv','$pb','$code','$email'";
    
    $result_s = sql_query($sql_select);
    // $result_ss = $sql_select['aa'];
    $count = sql_num_rows($result_s);
    if($count>0){
        //$result = sql_query("UPDATE taehee SET tbw_mb_id = '중복' WHERE tbw_mb_id = $id");
        echo "<script language=javascript> alert('이미 가입된 아이디입니다'); history.back(-1);</script>";
        exit();
    }else{
        $result = sql_query("INSERT INTO `taehee`(`tbw_mb_id`,`tbw_pv`,`tbw_pb`,`tbw_mb_code`,`tbw_mb_email`) VALUES('$id','$pv','$pb','$code','$email')");
    }

    
    

    // "UPDATE `taehee` SET `tbw_mb_id` WHERE "


    
    

    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('입력완료');";
        echo "window.location.href = './insert.php';";
        echo "</script>";
    }else {
        echo "입력실패";
    }
    
?>