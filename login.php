<?
/****************************************************************************
 *                               login.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                     Anne Baldwin and Natalie Jacewicz
 *
 *                        Allows a user to login.
 ***************************************************************************/

    // require common code
    require_once("includes/config.php"); 
 
    // if user is already logged in, redirect to index.php
    if (isset($_SESSION["user"]))
    {
        $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
        $host  = $_SERVER["HTTP_HOST"];
        $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
        header("Location: {$protocol}://{$host}{$path}/index.php");
    }
 
    // else redirect user to CS50 ID
    else
        header("Location: " . CS50::getLoginUrl(TRUST_ROOT, RETURN_TO));
 
?>

