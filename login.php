<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "demo";

$connect = mysqli_connect($host,$user,$password);
mysqli_select_db($connect,$db);

if(isset($_POST["user"])){
    $username = $_POST["user"];
    $pwd = md5($_POST["password"]);

    $sql = "select * from loginform where user = '".$username."' AND pass ='".$pwd."' limit 1";

    $result = mysqli_query($connect,$sql);

    if(mysqli_num_rows($result)==1){
        include 'home_user.php';
        exit();
    }
    else{
        echo " You have entered incorrect password";
        exit();
    }
}
?>

