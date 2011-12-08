<?
/****************************************************************************
 *                               login.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                              Anne Baldwin
 *
 *                        Allows a user to login.
 ***************************************************************************/

    // require common code
    require_once("includes/common.php"); 
 
    // configuration
    //require_once(dirname(__FILE__) . "/config.php");
 
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

<!DOCTYPE html>

<html>

  <head>
        <title>RecycleHarvard: Log In</title>
  </head>

  <body>
    <img id="logo" src="Images/logo.jpg"/>
    <div id="top">
       Log in!
      <a href="index.php"><img alt="Recycle-Harvard" src="Images/logo.jpg"></a>
    </div>

    <div id="middle">
      <form action="login2.php" method="post">
        <table>
          <tr>
            <td>Username:</td>
            <td><input name="username" type="text"></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input name="password" type="password"></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" value="Log In"></td>
          </tr>
        </table>
      </form>
    </div>

    <div id="bottom">
      Don't have an account yet? <a href="register.php">register</a> for an account
      <br>
      <a href="singlestream.html">Single Stream Recycling</a>
      |
      <a href="erecycle.html">Electronic Recycling</a>
      |
      <a href="whyrecycle.html">Why Recycle?</a>
      |
      <a href="game.php">Play the game!</a>
      |
      <a href="login.php">Login!</a>
      |
      <a href="logout.php" style="font-weight: bold">Log Out</a>
    </div>
  </body>

</html>
