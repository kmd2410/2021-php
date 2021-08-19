 <?php
  session_start();
  
  $db = new mysqli("localhost","root","123456","20210817member",3307);
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>