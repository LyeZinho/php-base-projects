<!-- 
Sessions exercise 

Explanation:

This code demonstrates how to create a simple login system using PHP sessions.

how sessions work:
1. Start a session using `session_start()`.
2. Define a variable to store the username and password. 
   - this variable is created on the server side, and it is related to the session, witch is liked to a cookie on the client side
     the cookie name is PHPSESSID
3. Check if the variable is set in the session.
4. If the variable is not set, this can mean that the session is new or not set.

-->
<?php
session_start();
$times = 0;

if(!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
    echo "Welcome to the site! This is your first visit.";
} else {
    $_SESSION['visits']++;
    echo "Welcome back! You have visited this site " . $_SESSION['visits'] . " times.";
}
?>