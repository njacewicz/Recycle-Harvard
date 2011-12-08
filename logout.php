<?
/****************************************************************************
 *                               logout.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                     Anne Baldwin and Natalie Jacewicz
 *
 *                            Logs out a user.
 ***************************************************************************/

    // require common code
    require_once("includes/common.php"); 
 
    // configuration
    //require_once(dirname(__FILE__) . "/config.php");
 
    // if user is already logged in, log out
    if (isset($_SESSION["user"]))
        unset($_SESSION["user"]);
 
    // redirect user to index.php
    $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
    $host  = $_SERVER["HTTP_HOST"];
    $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
    header("Location: {$protocol}://{$host}{$path}/logout2.php");
 
?>


