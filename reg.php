<?php include('success.html') ?>

<?php

session_start();

$username = "";
$email = "";
$mobile = "";

$errors = array();

include('errors1.php');

$db = mysqli_connect("localhost","root","root","demo") or die("could not connect to database");

$username = mysqli_real_escape_string($db,$_POST['user']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$mobile = mysqli_real_escape_string($db,$_POST['phone']);

if(empty($username))
{
    array_push($errors, "Username required");
}
if(empty($email))
{
    array_push($errors, "email required");
}
if(empty($mobile))
{
    array_push($errors, "mobile number required");
}

$user_check_query = "select * from register where user = '$username' limit 1";

$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);

// if($user){

//     if($user['user'] === $username){
//         array_push($errors,"username already exists");
//     }
// }


if(count($errors) == 0){
    // $password = md5($pwd); //encryption
    $query = "insert into register (username,email,mobile) values ('$username','$email','$mobile')";

    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "you have registered";

    header("location: success.html");
}