<?
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $root = $_POST['root'];
    $code = $_POST['code'];
    $aggrement = $_POST['aggrement'];
    
    $mysqli = mysqli_connect("localhost", "root", "123456", "20210819_bootstrap",3307);
    $signup = mysqli_query ($mysqli, "INSERT INTO user (name,nickname,email,address,address2,root,code,aggrement)
    VALUES ('$name', '$nickname', '$email', '$address', '$address2', '$root', '$code', '$aggrement')");

    if ($signup){
        header('Location:./form-bootstrap.html');
    }
?>