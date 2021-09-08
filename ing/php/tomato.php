<?php 

include_once('../../common.php');

if($is_admin != 'super')
    alert('최고관리자로 로그인 후 실행해 주십시오.', G5_URL);

$g5['title'] = ' 테이블 업그레이드';
include_once(G5_PATH.'/head.sub.php');




//================================================================
// 멤버 ios_pim 필드 추가
// if(!sql_query(" select po_minitomatoshop_ok, po_shop_ok from sw_point ", false)) {
//     sql_query(" ALTER TABLE `sw_point`
// 					ADD `po_minitomatoshop_ok`  VARCHAR(255) NOT NULL DEFAULT '' AFTER `po_shop_ok` ", true);
// }
//================================================================
// 테이블 컬럼명 변경 소스

// $sql = "ALTER TABLE sw_member CHANGE tew_pw mb_tew_pw VARCHAR(255)";
// $result = sql_query($sql);

//================================================================
// 테이블 생성 소스 테이블이름 ->컬럼명 타입 null인지 아닌지
// $sql = "CREATE TABLE sw_bptc_tbw(
// 		mb_mo int(11) null,
// 		tbw_mb_id VARCHAR(255) not null,
// 		tbw_pv VARCHAR(255) null,
// 		tbw_pb VARCHAR(255) null,
// 		tbw_mb_code VARCHAR(255) null,
// 		tbw_mb_email VARCHAR(255) null,
// 		tbw_mb_datatime DATE null
// ) ";

// $result = sql_query($sql);

//================================================================
//자동으로 숫자증가시키기 (이미 만들어진 테이블이 있는경우)
//ALTER TABLE [테이블명] MODIFY [컬럼명] [데이터타입:int] AUTO_INCREMENT;

// $sql = "ALTER TABLE `sw_bptc_tew` MODIFY `mb_mo` int(11) AUTO_INCREMENT";
// $result = sql_query($sql);

//================================================================
//테이블 제일앞에 컬럼추가방법
// $sql = "ALTER TABLE `sw_btc` ADD `mb_mo` int(11) NOT NULL FIRST";
// $result = sql_query($sql);


//================================================================
// 테이블 컬럼추가 소스 테이블명 					사용할 컬럼명		속성			기본값		이 컬럼뒤에 만들겠다.
// $sql = "ALTER TABLE `sw_shop_order` ADD COLUMN `reward_check`  VARCHAR(255) NOT NULL  AFTER `reward_amount`";
// $result = sql_query($sql);
//================================================================

// $sql = "alter table `sw_member` ADD COLUMN `mb_btc_address` VARCHAR(255) NOT NULL after `mb_eth_address`";
// $result = sql_query($sql);

//================================================================
//컬럼 삭제

// $sql = "alter table `sw_shop_item` drop column `it_server` " ;
// $result = sql_query($sql);

//================================================================

//================================================================
//사용가능한 INSERT 후 UPDATE 구문
// $sql = "UPDATE sw_write_marker a
// LEFT OUTER JOIN sw_member b ON
//     a.mb_id = b.mb_id
// SET
//     a.wr_21 = b.mb_4,
//     a.wr_22 = b.mb_5";

// $result = sql_query($sql);


//================================================================
//INSERT 구문
// $sql = "INSERT INTO `test_table_ldl`(`mb_id`, `mb_phnumber`, `mb_pinnumber`, `mb_name`, `test_02`, `test_03`, `mb_nick`, `global_cc`, `gcard_no`, `test_01`) VALUES ('leebc007' , '010-0000-0000', '123456789', 'leebc007', '', '' ,'', '' ,'' ,'')";
// sql_query($sql);
//================================================================

echo '<p>테이블 업데이트 완료!!</p>';

include_once(G5_PATH.'/tail.sub.php');

?>
