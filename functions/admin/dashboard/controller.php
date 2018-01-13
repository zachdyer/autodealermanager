<?php //dashboard controller

// Start the session
session_start();

// if logged in show dashboard else show error and redirect to login page
if(!$_SESSION['isLoggedIn']) {
    header('Location: /admin?errtype=warning&errmessage=You are not logged in. Please log in to view your dashboard');
}