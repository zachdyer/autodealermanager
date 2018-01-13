<?php //admin controller

$users = array(
    array(
        'username' => "admin",
        'password' => "password"
        )
    );
$username = $users[0]["username"];
$password = $users[0]["password"];

// Start the session
session_start();

// if username and password match or user logged in already go to the dashboard
if($_POST['username'] == $username && $_POST['password'] == $password || $_SESSION['isLoggedIn']) {
    //login process
    
    //Remember user is logged in
    $_SESSION['isLoggedIn'] = true;
    
    header("Location: /admin/dashboard");
} elseif(!empty($_POST)) {
    //fail
    Adm::status("warning", "Username or password is not correct.");
}

if($_GET['errmessage']) {
    Adm::status($_GET['errtype'], $_GET['errmessage']);
}

//If logging out destroy session and redirect 
if($_GET['logout'] && $_SESSION['isLoggedIn']) {

    // remove all session variables
    // session_unset(); 
    $_SESSION['isLoggedIn'] = false;
    
    $adm->status("success", "You have been successfully logged out!");
}