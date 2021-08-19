<?php
    header("Content-Type: text/html;charset=UTF-8");
    $conn = mysqli_connect("127.0.0.1", "root", "123456", "test1",3307);

    
    $data_stream = "'".$_POST['Data1']."','".$_POST['Data2']."','".$_POST['Data3']."'";
    $query = "INSERT INTO jsy(Data1,Data2,Data3) VALUES (".$data_stream.")";
    $result = mysqli_query($conn, $query);
     
    if($result)
      echo "1";
    else
      echo "-1";
     
    // mysqli_close($conn);

    


    
?>