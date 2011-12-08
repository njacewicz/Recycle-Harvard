<?
/****************************************************************************
 *                             register2.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                              Anne Baldwin
 *
 *                   Supports interface to register a user.
 ***************************************************************************/
    
    // require common code
    require_once("includes/common.php"); 


    // escape username and house to avoid SQL injection attacks
    $name = mysql_real_escape_string($_SESSION["user"]["fullname"]);
    $house = mysql_real_escape_string($_POST["house"]); 
    $email = mysql_real_escape_string($_SESSION["user"]["email"]);
    
    // prepare SQL
    $sql = "INSERT INTO users (name, email, house) VALUES ('$name',   '$email', '$house')";
<<<<<<< HEAD
  
=======
    
>>>>>>> aa1d6a330fc18659e2f659a3e04d5e8c6d1bc287
    // execute insertion
    $result = mysql_query($sql);

            
    // find out which id was assigned to that user
    $id = mysql_insert_id();
    
    // remember that user's now logged in by caching user's ID in session
    $_SESSION["id"] = $id;
               
    // redirect to portfolio
    redirect("index.php");
    
?>
