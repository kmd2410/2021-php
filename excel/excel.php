<?php
  include_once('./_common.php');
  function column_char($i) { return chr( 65 + $i ); }
  include_once(G5_LIB_PATH.'/PHPExcel.php');
  // $bo_table = $_GET["bo_table"];
  $bo_table = "sm_shop_item";
  // $wr_id = $_GET["wr_id"];
  $headers = array('');
  $widths  = array(20);
  // $header_bgcolor = 'FFABCDEF';
  $header_bgcolor = 'FFFFFF';
  $last_char = column_char(count($headers) - 1);
  $sql = " select * from $bo_table";
  $result = sql_query($sql);
  for($i=1; $row=sql_fetch_array($result); $i++) {
      $rows[] =
    array($row['it_id'],  
    $row['ca_id'],  
    $row['ca_id2'],  
    $row['ca_id3'],  
    $row['it_skin'],  
    $row['it_mobile_skin'],  
    $row['it_name'],  
    $row['it_maker'],  
    $row['it_origin'],  
    $row['it_brand'],  
    $row['it_model'],  
    $row['it_option_subject'],  
    $row['it_supply_subject'],  
    $row['it_type1'],  
    $row['it_type2'],
    $row['it_type3'],
    $row['it_type4'],
    $row['it_type5'],
    $row['it_basic'],
    $row['it_explan'],
    $row['it_explan2'],
    $row['it_mobile_explan'],
    $row['it_cust_price'],
    $row['it_price'],
    $row['it_point'],
    $row['it_point_type'],
    $row['it_supply_point'],
    $row['it_notax'],
    $row['it_sell_email'],
    $row['it_use'],
    $row['it_nocoupon'],
    $row['it_soldout'],
    $row['it_stock_qty'],
    $row['it_stock_sms'],
    $row['it_noti_qty'],
    $row['it_sc_type'],
    $row['it_sc_method'],
    $row['it_sc_price'],
    $row['it_sc_minimum'],
    $row['it_sc_qty'],
    $row['it_buy_min_qty'],
    $row['it_buy_max_qty'],
    $row['it_head_html'],
    $row['it_tail_tml'],
    $row['it_mobile_head_html'],
    $row['it_mobile_tail_html'],
    $row['it_hit'],
    $row['it_time'],
    $row['it_update_time'],
    $row['it_ip'],
    $row['it_order'],
    $row['it_tel_inq'],
    $row['it_info_gubun'],
    $row['it_info_value'],
    $row['it_sum_qty'],
    $row['it_use_cnt'],
    $row['it_use_avg'],
    $row['it_shop_memo'],
    $row['ec_mall_pid'],
    $row['it_img1'],
    $row['it_img2'],
    $row['it_img3'],
    $row['it_img4'],
    $row['it_img5'],
    $row['it_img6'],
    $row['it_img7'],
    $row['it_img8'],
    $row['it_img9'],
    $row['it_img10'],
    $row['it_1_subj'],
    $row['it_2_subj'],
    $row['it_3_subj'],
    $row['it_4_subj'],
    $row['it_5_subj'],
    $row['it_6_subj'],
    $row['it_7_subj'],
    $row['it_8_subj'],
    $row['it_9_subj'],
    $row['it_10_subj'],
    $row['it_1'],
    $row['it_2'],
    $row['it_3'],
    $row['it_4'],
    $row['it_5'],
    $row['it_6'],
    $row['it_7'],
    $row['it_8'],
    $row['it_9'],
    $row['it_10'],
    $row['pt_tag'],
    $row['pt_thumb'],
    $row['pt_link1'],
    $row['pt_link2'],
    $row['pt_map'],
    $row['pt_id'],
    $row['pt_it'],
    $row['pt_ccl'],
    $row['pt_img'],
    $row['pt_file'],
    $row['pt_main'],
    $row['pt_point'],
    $row['pt_order'],
    $row['pt_commission'],
    $row['pt_incentive'],
    $row['pt_marketer'],
    $row['pt_review_use'],
    $row['pt_comment_use'],
    $row['pt_comment'],
    $row['pt_qa'],
    $row['pt_good'],
    $row['pt_nogood'],
    $row['pt_show'],
    $row['pt_num'],
    $row['pt_day'],
    $row['pt_end'],
    $row['pt_reserve'],
    $row['pt_reserve_use'],
    $row['pt_syndi'],
    $row['pt_explan'],
    $row['pt_mobile_explan'],
    $row['pt_msg1'],
    $row['pt_msg2'],
    $row['pt_msg3']);
}
$data = array_merge(array($headers), $rows);
$excel = new PHPExcel();
$excel->setActiveSheetIndex(0)->getStyle( "A1:${last_char}1" )->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB($header_bgcolor);
$excel->setActiveSheetIndex(0)->getStyle( "A:$last_char" )->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER)->setWrapText(true);
foreach($widths as $i => $w) $excel->setActiveSheetIndex(0)->getColumnDimension( column_char($i) )->setWidth($w);
$excel->getActiveSheet()->fromArray($data,NULL,'A1');
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"shop_item-".date("ymd", time()).".xls\"");
header("Cache-Control: max-age=0");
$writer = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
$writer->save('php://output');
?>

