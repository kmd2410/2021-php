<?
    include_once "location of db_con.php";

    $id = $_POST['id'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); //해쉬값으로 암호화
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
?>