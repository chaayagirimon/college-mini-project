<?php include('home_user.html') ?>

<?php

session_start();

$username = "";
$pwd = "";

$errors = array();

include('errors.php');

$db = mysqli_connect("localhost","root","root","demo") or die('Not connected : ' . mysqli_connect_error());

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

$user_check_query = "select * from loginform where user = '" . mysqli_escape_string($db,$username) . "' limit 1";

$results = mysqli_query($db,$user_check_query);
if(!$results){
	die(mysqli_error($db));
}

$user = mysqli_fetch_assoc($results);

if($user){
    // print($user['user']);
    if($user['user'] === $username){
        array_push($errors,"username already exists");
    }
    // print(count($errors));
}

if(count($errors) == 0){
    $password = md5($pwd); //encryption
    $query = "insert into loginform (user,pass) values ('" . mysqli_escape_string($db,$username) . "','" . mysqli_escape_string($db,$password) . "')";

    $results=mysqli_query($db,$query);
    if(!$results){
        die(mysqli_error($db));
    }
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "you are signed up";

    header("location: home_user.html");
}else{
    
    header("location: signup2.php?err=".end($errors));
}