<?php
include_once "_common.php";
if (!$is_admin) {
    alert("관리자만 접근 가능합니다.");
    exit;
}

$excel_down = $g5['write_prefix'] . $_GET['bo_table']; //엑셀 다운로드 테이블
$wr_id = $_GET['wr_id'];

$hp_filename = "자동차 상담내역 리스트";
//@sql_query("SET CHARACTER SET utf8");  // 한글깨지면 주석해지

if ($ms =="excel"){
    $g5['title'] = "엑셀 문서 다운로드";
    header( "Content-type: application/vnd.ms-excel" );
    header( "Content-Disposition: attachment; filename={$hp_filename}.xls" );
    //header( "Content-Description: PHP4 Generated Data" );
} else if ($ms =="power"){
    $g5['title'] = "파워포인트 문서 다운로드";
    header( "Content-type: application/vnd.ms-powerpoint" );
    header( "Content-Disposition: attachment; filename={$hp_filename}.ppt" );
    // header( "Content-Description: PHP4 Generated Data" );
} else if ($ms =="word"){
    $g5['title'] = "워드 문서 다운로드";
    header( "Content-type: application/vnd.ms-word" );
    header( "Content-Disposition: attachment; filename={$hp_filename}.doc" );
    //header( "Content-Description: PHP4 Generated Data" );
} else if ($ms =="memo"){
    $g5['title'] = "메모 문서 다운로드";
    header( "Content-type: application/vnd.ms-notepad" );
    header( "Content-Disposition: attachment; filename={$hp_filename}.txt" );
} else {
    header( "Content-type: application/vnd.ms-excel" );
    header( "Content-Disposition: attachment; filename={$hp_filename}.xls" );
}
header( "Content-Description: PHP4 Generated Data" );

// 원글 + 코멘트 다운로드
//$temp=sql_fetch_array(sql_query("select count(*) from {$excel_down} "));
//$result=sql_query("select * from {$excel_down} order by wr_datetime desc");

// 원글만 다운로드 (코멘트 제외) ,  2013-10-21 추가
$temp=sql_fetch_array(sql_query("select count(*) from {$excel_down} where wr_is_comment = '0' "));
$result=sql_query("select * from {$excel_down} where wr_is_comment = '0' order by wr_datetime desc"); 

$number=$temp[0];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.txt {mso-number-format:'\@'}
</style>
</head>

<body>
<table>
    <tr>
        <td>No</td>
        <td>날짜</td>
        <td>토마토ID</td>
        <td>상담고객명</td>
		<td>고객연락처</td>
        <td>상품 목록</td>
        <td>상담 시간</td>
        <td>메모</td>
    </tr>

<?php
while($data=sql_fetch_array($result)) {
    echo "
    <tr>
        <td class='txt'>{$data['wr_id']}</td>
        <td class='txt'>{$data['wr_datetime']}</td>
        <td class='txt'>{$data['mb_id']}</td>
        <td class='txt'>{$data['wr_2']}</td>
        <td class='txt'>{$data['wr_3']}</td>
        <td class='txt'>{$data['wr_1']}</td> 
        <td class='txt'>{$data['wr_4']}</td> 
        <td class='txt'>{$data['wr_5']}</td> 
    </tr>
    ";
    $number--;
}
?>
</table>
</body>
</html>