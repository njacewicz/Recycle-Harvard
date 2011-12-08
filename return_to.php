<?
/****************************************************************************
 *                              return_to.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                     Anne Baldwin and Natalie Jacewicz
 *
 *                      Receives return from CS50 Login
 ***************************************************************************/ 
    // require common.php
    require_once("includes/common.php");
    
    // configuration
    require_once(dirname(__FILE__) . "/includes/config.php");
 
    // remember which user, if any, logged in
    $user = CS50::getUser(RETURN_TO);
    if ($user !== false)
        $_SESSION["user"] = $user;
 
    // redirect user to index.php
    $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
    $host  = $_SERVER["HTTP_HOST"];
    $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
    
    // find the user's id
    $email = mysql_real_escape_string($_SESSION["user"]["email"]);
    $result = mysql_query("SELECT id FROM users WHERE email = $email");
    
    // dump test
    //dump($result);
                      
    // access the data row
    $row = mysql_fetch_array($result); 
                     
    // define session id to be the id in the database
    $_SESSION["id"] = $row["id"];
    
    // define id
    $id = $_SESSION["id"];
    
    // if that user has already registered, redirect them to index.php
    $result = mysql_query("SELECT * FROM users WHERE email = $email");
    if (mysql_num_rows($result) == 1)
        redirect("index.php");
    else
        redirect("register.php");

?>

