<?
/****************************************************************************
 *                               register.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                              Anne Baldwin
 *
 *                            Registers a user.
 ***************************************************************************/
    
    // require common code
    require_once("includes/common.php");

?>

<!DOCTYPE html>

<html>

  <head>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
        <title>RecycleHarvard: Register!</title>
  </head>

  <body>
    <img id="logo" src="Images/logo.jpg"/>
    <div id="top">
      <a href="index.php"><img alt="C$50 Finance" src="images/logo.gif"></a>
    </div>

    <div id="middle">
      <form action="register2.php" method="post">
        <table>
          <tr>
            <td>House</td>
            <td>
                  <select name ="house">
                  <option value="House" disabled>
                  <option value="Adams">Adams House</option>
                  <option value="Cabot">Cabot House</option>
                  <option value="Currier">Currier House</option>
                  <option value="Dunster">Dunster House</option>
                  <option value="Eliot">Eliot House</option>
                  <option value="Kirkland">Kirkland House</option>
                  <option value="Leverett">Leverett House</option>
                  <option value="Lowell">Lowell House</option>
                  <option value="Mather">Mather House</option>
                  <option value="Pfoho">Pfoho House</option>
                  <option value="Quincy">Quincy House</option>
                  <option value="Winthrop">Winthrop House</option>
                  </select>
            </td>
            <td colspan="2"><input type="submit" value="Create an account"></td> 
          </tr>
        </table>
      </form>
    </div>

    <div id="bottom">
    </div>

  </body>

</html>
