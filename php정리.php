<?  
    //html 에서 action으로 받을시 name으로 받고, ajax로 받을시 id로 받음..?

    // 그누보드 관리자외 금지
    // include_once("./common.php");

    // if($is_admin != 'super')
    // alert('최고관리자로 로그인 후 실행해 주십시오.', G5_URL);

    // 에러 확인
    error_reporting(E_ALL); 
    ini_set('display_errors', 1); 

    // DB 연결
    $connect = new mysqli("localhost","kmd2410","a135790!","kmd2410");
    if($connect->connect_errno){
        echo 'DB연결실패:'.$connect->connect_error.'';
        exit(); 
    } else {
        echo "DB연결성공<br>";
    }

    // escape로 데이터 받기
    // $ex = $_POST["ex"]; => 원래방식
    // $ex = mysqli_real_escape_string($connect,$_POST["ex"]);

    // 암호화 boxing
    // $password = password_hash($password, PASSWORD_DEFATULT);
    
    // 복호화 unboxing
    // if (password_verify(ori,hash)){
    //     echo "일치";
    // } else {
    //     echo "불일치";
    // }

    // 암호화 md5 복호화 불가
    // $password = md5($_POST["password"]);

    // 암호화 base64 복호화 가능
    // $password = base64_encode($_POST["passowrd"]);
    // $password = base64_decode($_POST["passowrd"]);

    // 사용자지정 암호화
    // $key = "masterkey";
    // openssl_encrypt($password, "aes-256-cbc", $key, true, str_repeat(chr(0),16));
    // openssl_decrypt($password, "aes-256-cbc", $key, true, str_repeat(chr(0),16));


    // 암호화 sha256





    // 테이블 생성
    // $query = "CREATE TABLE +tablename+(
    //     +columnname+ +data(num)+ null,
    //     => VARCHAR(255) not null)";
    
    // 데이터 가져오기 WHERE은 조건
    // $query = "SELECT +column+,+column+ or * FROM +tablename+";
    // $query = "SELECT +column+,+column+ or * FROM +tablename+ WHERE num = 50";
    // WHERE +column+ like
    //     =>(a%:a로시작하는값, %a:a로끝나는값,%a%:a를포함하는값) 
    // WHERE +column+ betweend 시작값 and 끝값
    
    // substring(+column+,n,length); n~length까지 추출하여 반환
    // SUBSTRING_INDEX(+column+,"기준문자","시작위치 -는 뒷부분 +는 앞부분")
    // left(+column+,length); 왼쪽에서부터 length까지 추출하여 반환

    $query = "SELECT userid,userpw FROM 20210822_user";

    // 데이터 삽입하기 
    // $query = "INSERT INTO +tablename+ (+column+,+column+) VALUES (+vlu+,+vlu+)";
    // $query = "INSERT INTO +tablename+ VALUES (+vlu+,+vlu+)";
    
    // $query = "INSERT INTO 20210822_user VALUES (5,5,5,5)";

    // 데이터 수정하기
    // $query = "UPDATE +tablename+ SET +column+ = +vlu+";
    // $query = "UPDATE +tablename+ SET +column+ = REPLACE(+column+,'ori','after')";

    // $query = "UPDATE 20210822_user SET email = 12345 WHERE email = 123";
    
    // 데이터 삭제
    // $query = "DELETE from +tablename+";
    // $query = "DELETE from +tablename+ WHERE +column+ = +vlu+";

    // $query = "DELETE from 20210822_user WHERE email = 11";

    // 테이블 컬럼명 변경
    // $query = "ALTER TABLE +tablename+ CHANGE +oriname+ +nexname+ VARCHAR(255)";
    
    // $query = "ALTER TABLE 20210822_user CHANGE name mingzi VARCHAR(255)";

    // 테이블 컬럼 추가
    // $query = "ALTER TABLE +tablename+ ADD COLUMN +columnname+ VARCHAR(255) NULL AFTER +tablename+";
    // $query = "ALTER TABLE +tablename+ ADD COLUMN +columnname+ VARCHAR(255) NULL FIRST";

    // 테이블 컬럼 삭제
    // $query = "ALTER TABLE +tablename+ drop column +columnname+";
    
    // 테이블 오토속성 추가
    // $query = "ALTER TABLE +tablename+ MODIFY +columnname int(10) AUTO_INCREMENT+";

    // 테이블 조인
        // INNER JOIN : 기준 테이블과 조인 테이블 모두 데이터가 존재해야 조회됨
        // OUTER JOIN : 기준 테이블에만 데이터가 존재하면 조회됨

        // $query = "SELECT +tablename+.+columname+,+tablename+.+columname+, FROM +tablename+ INNER JOIN +tablename+
        //             ON +tablename+.+columname+ = +tablename+.+columname+";

        // $query = "SELECT "
        
    // 테이블 그룹 정렬
    $query = SELECT +want group columname+, GROUP_CONCAT(+concat colum+ SEPARATOR',') FROM +tablename+ GROUP BY +want group columname+


    // 쿼리문 실행
    // $result = $connect->query($query) or die($this->_connect->error);
    // $result = mysqli_query($connect,$query);

    $result = mysqli_query($connect,$query);
    
    // 데이터 출력하기
    $num = mysqli_num_rows($result); 
    echo $num."<br>";
    
    if (mysqli_num_rows($result) > 0 ) {
        
        while($row = mysqli_fetch_assoc($result)){
            $list = $row["userid"]."<br>";
            echo substr_replace($list,1,2);
            echo "아이디".$row["userid"]."비번".$row["userpw"]."<br>";
        } }else{
            echo "데이터x";
        }

    // 데이터 테이블로 출력
    // echo "<style>td {border:1px solid #ccc; padding:5px;}</style>";
    // echo "<table><tbody>";
    // if (mysqli_num_rows($result) > 0) {
    //     while ($row = mysqli_fetch_assoc($result)){
    //         echo "<tr>";
    //         echo "<td>아이디:".$row["userid"]."</td><td>비밀번호".$row["userpw"]."</td>";
    //         echo "<tr>";
    //     }
    // } else {
    //     echo "no data";
    // }

    // 로그인

    // 약간 세션 개념이 로그인 유지 상태 이런건가 ..? 맞는거 같음 ....
    // if($result->num_rows > 0){
    //     $row = $result->fetch_array(MYSQLI_ASSOC);
    //     if ($row["pw"] == $pw){
    //         $_SESSION["id"] = $id;
    //         if (isset($_SESSION["userid"])){
    //             header("Location:.........../")
    //             }
    //         } else {
    //                 echo "세션 저장 실패";
    //     } else {
    //         echo "아이디와 비밀번호가 일치하지 않습니다.";
    //     } 

    // }else {
    //     echo "가입된 해당 아이디가 없습니다.";
    // }

    // 로그인 2
    // session_start(); //세션 시작
    // $query = "SELECT * FROM +taeblename+ WHERE id='$id' and pw='$pw'";
    // $row = mysqli_fetch_array($result);

    // if ($id == $row["id"] && $pw == $row["pw"]){
    //     $_SESSION["id"] = $row["id"];
    //     $_SESSION["name"] = $row["name"];
    //     echo "<script>location.href='login.php'</script>;";
    // } else {
    //     echo "잘못된 아이디 또는 비밀번호 입니다.";
    // }

    // 로그아웃
    // session_start();
    // if($_SESSION["id"] != null){
    //     session_destroy();
    // }
    
    // 문자 제한 두기
    // if(!preg_match("/^[a-z]0-9-_]/i",$id))

    // 특정 문자 제한 및 추출
    // preg_replace(),preg_match();

    // 세션 생성
    // session_start(); 
    // 세션 변수 저장
    // $_SESSION["name"] = "한태희";
    // 세션 변수 불러오기
    // echo "제 이름은 {$_SESSION["name"]} 입니다.";
    // 모든 세션 변수 불러오기
    // print_r($_SESSION);
    // var_dump($_SESSION);
    // 모든 세션 변수의 등록 해지
    // session_unset()
    // 세션 아이디 삭제 완전종료
    // session_destroy();


    // 쿼리문 성공 확인
    if($result){
        echo "쿼리 입력 성공";
    }else {
        echo "쿼리 입력 실패";
        exit();
    }
    // 종료
    mysqli_close($connect);

    // 데이터 백업
    // mysqldump -uroot -p -A > +filename+.sql;
    // mysqldump -uroot -p +name+ > +filename+.sql;
    // mysqldump -uroot -p +dataname+ +tablename+ > +filename+.sql;

    // curl(get)
    $data = array(
        'test' => 'test'
    );
    
    $url = "https://www.naver.com" . "?" , http_build_query($data, '', );
    
    $ch = curl_init();                                 //curl 초기화
    curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정하기
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);      //connection timeout 10초 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   //원격 서버의 인증서가 유효한지 검사 안함
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;

    // curl(post)
    $data = array(
        'test' => 'test'
    );
    
    $url = "https://www.naver.com";
    
    $ch = curl_init();                                 //curl 초기화 로딩
    curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정하기
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환 (1로고정?)
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);      //connection timeout 10초 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   //원격 서버의 인증서가 유효한지 검사 안함(true일시 https 일부 안열림)
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);       //POST data
    curl_setopt($ch, CURLOPT_POST, true);              //true시 post 전송 
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
    
    // curl error 확인
    $response = curl_exec ($ch);

    var_dump($response);        //결과 값 출력
    print_r(curl_getinfo($ch)); //모든 정보 출력
    echo curl_errno($ch);       //에러 정보 출력
    echo curl_error($ch);       //에러 정보 출력

    // 쿠키 저장 및 가져오기
    $filename = "C:\example=http\static\cookie.txt";
    curl_setopt($ch, CURLOPT_COOKIEJAR, $filename); //저장

    // curl 쿠키값 직접 설정
    curl_setopt($ch, CURLOPT_COOKIE, "name=value"); // 쿠키 값이 추가됨

    // referer 설정 (일부 사이트 referet을 검증 값으로 사용 할 수 있음 셋팅 방법)
    curl_setopt($ch, CURLOPT_REFEPER, "https://exampe.com")

    // JSON형식을 => 배열 or 객체로 변환
    json_decode();
    $json = jsondata;
    $result = json_decode($json, true); // 배열로 변환
    $result = json_decode($json, false); // NULL로 변환

    // 변수 정보보기
    var_dump();

    // 배열을 구분자로 나누어 한개의 문자열로 만들기
    $str = implode(",",$array);
    // 한개의 문자열을 구분자로 구분하여 배열로 만들기
    $array = explode(",",$str);

?>