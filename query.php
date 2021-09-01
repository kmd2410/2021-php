<?
    $con = mysqli_connect("localhost","kmd2410","a135790!","user_info");
    // if (mysqli_connect_errno()){
    //     echo(mysqli_connect_error());
    //     exit();
    // }
    if($con){
        echo "연결";
    }else {
        echo "실패";
    }
    // $sql = "SELECT * FROM info";

    
    // $result = mysqli_query($con,$sql);
    
    // while($row = mysql_fetch_array($result)){
    //     echo $row['userid'];
    // }
?>