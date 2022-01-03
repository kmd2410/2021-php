<?
$file_name = "sample"; // file name
$table = ""; // table name
$output_file_name = "$file_name.xls";
header( "Content-type: application/vnd.ms-excel");
header( "Content-type: application/vnd.ms-excel; charset=utf-8");
header( "Content-Disposition: attachment; filename={$output_file_name}.xls" );
header( "Content-Description: PHP4 Generated Data");

$sql = "select * from tblName order by reg_date desc";
$result = mysql_query($sql);

$query = sql_query("SELECT * FROM $table");

// 테이블 상단 만들기
$EXCEL_STR = "
    <table border='1'>
    <tr>
        <td>번호</td>
        <td>코드</td>
        <td>내용</td>
    </tr>";

while($row = sql_fetch_array($query)) {
    $EXCEL_STR .= "
    <tr>
        <td>".$row['idx']."</td>
        <td>".$row['code']."</td>
        <td>".$row['contents']."</td>
    </tr>
    ";
}

$EXCEL_STR .= "</table>";

echo "<meta content=\"application/vnd.ms-excel; charset=UTF-8\" name=\"Content-type\"> ";
echo $EXCEL_STR;


?>