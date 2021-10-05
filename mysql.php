
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

    ★ DB 연동
    $con = mysqli_connect("$host", "$username", "$password", "$dbname","$port");
    ★ DB 오류 원인
    mysqli_connect_error();
    ★ DB 종료
    mysqli_close();
    ★ 사용할 DB선택
    mysqli_select_db();

    ★ QUERY 명령
    $sql  = "
        INSERT INTO :table name (
            test1,
            test2,
            test3
        ) VALUES (
            'test','test','test'
        )";
    $result = mysqli_query($con, $sql);
    $result = $con->query($sql)

    if($result === false){
        echo mysqli_error($conn);
    }
    $result->fetch_array();
    ★ 결과 몇개의 행인이 확인
    mysqli_num_rows();


    ★html 값 php로 넘기기
    $id = $_POST['id'] : html에서 name id로 되있는 값 저장 form action에 반드시 해당 php연동
    $password = $_POST["password"];
    $password = password_hash($password, PASSWORD_DEFAULT); //패스워드는 암호화하기
    //암호화한건 password_verify()로 복화해서 비교해야함
    
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

        UPDATE A SET a-1 = a-2 WHERE a-1 = a-3;
        : A테이블에 a-1컬럼안에 a-3벨류가 들어있는 애를 a-2로 변경하겠다.

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
    5. fetch_all => 한번에 배열로 반환?
    $data = mysqli_fetch_array($result);
    $data = $result->fetch_array(MYSQLI_ASSOC);

    ★
    *strpos : 텍스트 내에서 해당 문자가 있는 자리를 리턴
    *sub_str_count : 텍스트 내에서 해당 문자가 몇개 인지 리턴
    *substr_replace : 텍스트 내에서 원본문자를 원하는 문자로 변환
    $num = "123-1234-1234";
    $ex = strpos($num,"-"); //3
    $ex = substr_count($num,"-"); //2
    $ex = substr_replace($num,"-",3,1); // num문자 3번째 문자를 -로 1개만 변환 
    
    substr_replace("대상문자열","변경할내용","변경문자열위치","변경문자갯수")


?>