<?/****************************************************************************
 *                              config.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                     Anne Baldwin and Natalie Jacewicz
 *
 *                      Includes constants for CS50 login
 ***************************************************************************/ 
 
    // URL that CS50 ID should ask users to trust; must be registered with CS50,
    // per the HOWTO at https://manual.cs50.net/ID; must be a prefix of RETURN_TO
    define("TRUST_ROOT", "http://cloud.cs50.net/~abaldwin/");
 
    // URL to which CS50 ID should return users; must be registered with CS50,
    // per the HOWTO at http://manual.cs50.net/ID
    define("RETURN_TO", "http://cloud.cs50.net/~abaldwin/return_to.php");
 
    // CS50 Library; ideally, this should not be inside public_html (or DocumentRoot)
    require_once("CS50/CS50.php");
 
    // ensure $_SESSION exists
    session_start();
 
?>
