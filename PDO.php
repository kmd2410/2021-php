<?
    $host = 'localhost';
    $username = 'root'; # MySQL 계정 아이디
    $password = '123456'; # MySQL 계정 패스워드
    $dbname = '20210819_insert';  # DATABASE 이름
    $port = '3307'

    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    
    try {

        $con = new PDO("mysql:host={$host};port={$port};dbname={$dbname};charset=utf8",$username, $password);
    } catch(PDOException $e) {

        die("Failed to connect to the database: " . $e->getMessage()); 
    }


    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //에러 발생시 PDOException을 throw함. 이경우 try{}catch{}사용
    $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //Preppared Statement를 데이터베이스가 지원하지 않을 경우 에뮬레이션 하는 기능
    
    // ERROR
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT); : 에러 출력하지 않음
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); : Warning만 출력
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); : 에러 출력
    


    PDO::FETCH_NUM : 숫자 인덱스 배열 반환
    PDO::FETCH_ASSOC : 컬럼명이 키인 연관배열 반환
    PDO::FETCH_BOTH : 위 두가지 모두
    PDO::FETCH_OBJ : 컬럼명이 프로퍼티인 인명 객체 반환





?>