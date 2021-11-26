<?php include('done.html') ?>

<?php

session_start();

$username = "";
$pwd = "";

$errors = array();

include('errors.php');

$db = mysqli_connect("localhost","root","","demo") or die("could not connect to database");

$username = mysqli_real_escape_string($db,$_POST['user']);
$pwd = mysqli_real_escape_string($db,$_POST['password']);


if(empty($username))
{
    array_push($errors, "Username required");
}
if(empty($pwd))
{
    array_push($errors, "password required");
}

$user_check_query = "select * from loginform where user = '$username' limit 1";

$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){

    if($user['user'] === $username){
        array_push($errors,"username already exists");
    }
}


if(count($errors) == 0){
    $password = md5($pwd); //encryption
    $query = "insert into loginform (user,pass) values ('$username','$password')";

    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "you are signed up";

    header("location: done.html");
}