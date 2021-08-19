
<?php
    ★
    header('Content-Type: text/html; charset=utf-8'); //한글설정
    $con->set_charset("utf8");
    header('Location:'); //이동
    echo ""; //출력
    include(""); //연동
    isset() : 설정된 변수 인지 확인
        if (isset($var1)){} //var1 정의 되어있을경우 true
    mysql_fetch_row() : 배열의 번호로 접근
    mysql_fetch_assoc() : 필드명(열이름,키값)을 통해 접근
    mysql_fetch_array() : 위 2개 접근법 모두 사용

    ★DB연동
    $host = "";
    $username = "";
    $password = "";
    $dbname = "";
    $port = "";

    $con = mysqli_connect("$host", "$username", "$password", "$dbname","$port");

    $sql  = "
        INSERT INTO :table name (
            test1,
            test2,
            test3
        ) VALUES (
            'test','test','test'
        )";
    $result = mysqli_query($con, $sql);
    
    if($result === false){
        echo mysqli_error($conn);
    }
    $result = $con->query($sql)
    $result->fetch_array();



    ★html 값 php로 넘기기
    $id = $_POST['id'] : html에서 name id로 되있는 값 저장 form action에 반드시 해당 php연동
    
    ★PDO
    $con = new PDO("mysql:host={$host};port=3307;dbname={$dbname};charset=utf8",$username, $password);
    // 단 PDO 사용시 try와 catch 사용
        try {

            $con = new PDO("mysql:host={$host};port=3307;dbname={$dbname};charset=utf8",$username, $password);
        } catch(PDOException $e) {

            die("Failed to connect to the database: " . $e->getMessage()); 
        }
    
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    ★에러메세지 출력
    error_reporting(E_ALL); 
    ini_set('display_errors',1);
    // 개발 완료 후에는 삭제
    
    ★쿼리문
    1. SELECT : 데이터 불러오기
    => SELECT 컬럼명 FROM 테이블명;
    => SELECT 컬럼명 FROM 테이블명 WHERE 컬럼명=값;    
        where 구문을 추가하여 참인 데이터만 불러오기
    => SELECT 컬럼명 FROM 테이블명 WHERE 컬럼명=값 ORDER BY 컬럼명 ASC or DESC;
        ORDER BY 뒤에 오는 컬럼명에대하여 데이터를 정렬. ASC는 오름차순 DESC는 내림차순. ASC가 기본값
    => SELECT 컬럼명 FROM 테이블명 WHERE 컬럼명=값 ORDER BY 컬럼명 ASC or DESC LIMIT 개수;
        LIMIT 구문을 추가하여 원하는 갯수 만큼 불러오기

    2. INSERT : 데이터 삽입
    => INSERT INTO 테이블명 (컬럼명1, 컬럼명2, 컬럼명3) VALUES (값1, 값2, 값3);
        문자열일 경우 ''로 감싸기
    => INSERT INTO 테이블명 VALUES (값1, 값2, 값3);
        테이블명 안써도 되지만 테이블갯수와 값갯수가 일치해야함

    3. UPDATE : 데이터 수정
    => UPDATE 테이블명 SET 컬럼명 = 변경할 값;
    => UPDATE 테이블명 SET 컬럼명 = 변경할 값 WHERE 컬럼명=값;
        where 데이터만 변경
    => UPDATE 테이블명 SET 컬럼명1 = 변경할 값1,컬럼명2 = 변경할 값2 WHERE 컬럼명=값;
        콤마를 사용하여 여러개의 값 변경

    4. DELETE : 데이터 삭제
    => DELETE from 테이블명;
    => DELETE from 테이블명 WHERE 컬럼명=값;
        where 데이터만 삭제
    
    5. WHERE 여러개 사용하고 싶을시 ,가 아닌 and를 사용합니다. 

    ★fetch
    1. fetch_row => 숫자 인덱스로 배열 반환
    2. fetch_assoc => 필드명 인덱스로 배열 반환
    3. fetch_array => 숫자, 필드명 인덱스로 배열 반환
    4. fetch_object => 필드명 인덱스를 가진 객체를 반환
    $data = mysqli_fetch_array($result);
    $data = $result->fetch_array(MYSQLI_ASSOC);

?>