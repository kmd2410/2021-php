
<?php
    $conn = mysqli_connect(":ip", ":database id", ":database pw", ":schema name",:port num);
    $sql  = "
        INSERT INTO :table name (
            test1,
            test2,
            test3
        ) VALUES (
            'test','test','test'
        )";
    $result = mysqli_query($conn, $sql);
    if($result === false){
        echo mysqli_error($conn);
    }
?>