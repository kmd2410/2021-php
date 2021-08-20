<?php
    //1. DB 연결
    $connect = new mysqli("localhost","root","123456","test");

    //2. DB 연결확인
    if($connect->connect_errno){
        echo '[연결실패] : '.$connect->connect_error.''; 
    } else {
        echo '[연결성공]';
    }
    
    //3. 문자셋 지정
    if(! $connect->set_charset("utf8"))// (php >= 5.0.5)
    {
        echo '[문자열변경실패] : '.$connect->connect_error;
    }

    //4. query
    $query = "CREATE TABLE taehee3(
        mb_mo int(11) null,
        test_id VARCHAR(255) not null,
        test_pv VARCHAR(255) null,
        test_pb VARCHAR(255) null,
        test_code VARCHAR(255) null,
        test_email VARCHAR(255) null,
        test_datatime DATE null
        ) ";

    //5. DB에 query 작동
    $result = $connect->query($query) or die($this->_connect->error);
    
    
    //6. 결과 처리
    // while($row = $result->fetch_array())
    // {
    //     echo $row['col'].'';
    // }

    //7. 연결 종료
    // $connect->close();



?>