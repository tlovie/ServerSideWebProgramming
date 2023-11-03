# Week 8 - Cookies and Sessions
## Assignment 2
  - Q1 - what does the shell webpage do https://csunix.mohawkcollege.ca/~lovie/10260/a2/a2-q1
    - how to debug your code?
  - Q2 - what does this webpage do https://csunix.mohawkcollege.ca/~lovie/10260/a2/a2-q2

## Cookies
  - what is a cookie?
  - https://www.freecodecamp.org/news/everything-you-need-to-know-about-cookies-for-web-development/
  - example: setting a cookie to remember username
  - https://tutorialsclass.com/code/php-login-remember-cookies-script/

## Session
  - builds on top of a cookie
  - cookie is used to store the session id
  - what is going on here?
    - cookie comes back with PHPSESSID field
    - what is the server doing here?
  - exercise for sessions
    - write a website that implements blog
    - use files to store the posts (use best practices for data cleansing)
    - implement 2 different roles
      1. blog reader - only sees blog posts
      2. blog editor - can input new entries
     
  
```php
<?php
session_start();

$user_type = filter_input(INPUT_GET, "user_type", FILTER_SANITIZE_SPECIAL_CHARS);

echo "We can use user_type as a proxy for user authentication<br>"
    ."users would enter a name and password and then database would<br>"
    ."look up the permissions that the user has.<br>"
    ."there are 2 valid user types in this demo <i>read</i> and <i>write</i>.<br><br>";

if( isset($user_type) && ($user_type === "read" || $user_type === "write" ) ) 
    $_SESSION['user_type'] = $user_type;
//else
//    unset($_SESSION['user_type']);

echo isset($_SESSION['user_type']) ? "type of user is {$_SESSION['user_type']}<br>" : "type of user is invalid (unauthenticated)<br>" ;

?>
<form action="blog_login.php" method="GET">
<div><label>user_type</label>
<input name="user_type" id="user_type" value="<?= isset($_SESSION['user_type']) ? $_SESSION['user_type'] : "" ?>" />
<br><br></div>
<div><input type="submit" name="submit" value="submit"><br><br></div>
<div><a href="blog_inner.php">goto blog_inner.php</a><br><br></div>
<div><a href="blog_logout.php">goto blog_logout.php</a></div>
</form>
```
  
