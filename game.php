<?
/****************************************************************************
 *                               game.php
 *
 *                          Computer Science 50
 *                              Final Project
 *                     Anne Baldwin and Natalie Jacewicz
 *
 *                 Allows a user to play the recycling game.
 ***************************************************************************/

// require common code
   require_once("includes/common.php"); 
   
// remember session id
   $id = $_SESSION["id"];
   
?>

<!DOCTYPE html>

 
 <html>
    <head>
       <title>RecycleHarvard:Welcome to the Game!</title>
       <link href="css/styles.css" rel="stylesheet" type="text/css" />
       <script src = "items.js"></script>
       <script src = "jquery.js"></script>
       <script type = "text/javascript">
        
       
       // load a random image to be sorted to the page
       function random_image ()
       { 
           // return a new random number between 0 and the length of the ITEMS array 
           random_integer = Math.floor(Math.random()*(ITEMS.length +1));       
        
           // store the loaded item's status (recyclable, disposable, or electronic recyclable)
           status = ITEMS[random_integer].status;
           
           // find the corresponding name in the array
           var name = ITEMS[random_integer].name;
           
           // define the img source
           var picture = "Images/" + name + ".png";
           
           // set the src attribute of the picture
           document.getElementById("RandomItem").setAttribute("src", picture);
           
           // set the caption attribute of the picture
           document.getElementById("Caption").innerHTML = ITEMS[random_integer].caption;
       }
       
       
       // after the page is loaded and the trash is clicked, check whether that item belongs in the trash
       $(document).ready(function(){  
            $("#trash").click(function() {
            
            // remember that the trash wash clicked  
            var bin = $("#trash").attr('alt');
            
            // load a new image (even for the users who arent playing for points)    
            random_image();
            
            // make the ajax call to server    
            $.ajax("game2.php",{
            data: {status:status, bin:bin},
            dataType: "json",
            success: function(data){ 
                // upon success, update points and whether their answer was correct
                $("#Correctness").html(data.correct);
                $("#points").html(data.points);
                // give them the option to learn more
                $("#Learn More").attr("href", singlestream.html);
            }});          
      });
      
      // if the recycle image is clicked, validate
      $("#recycle").click(function() {
            
            // remember what bin was clicked (recycling)  
            var bin = $("#recycle").attr('alt');
            
            // load a new image to the page for them to evaluate     
            random_image();  
            
            // send the status and receptacle data to game2.php for validation and points update    
            $.ajax("game2.php",{
            data: {status:status, bin:bin},
            dataType: "json",
            success: function(data){
                $("#Correctness").html(data.correct);
                $("#points").html(data.points);
                $()      
            }});
                 
      });
     
     // if the ewaste image is clicked, validate
     $("#ewaste").click(function() {
            
              
            // remember what bin was clicked (trash)  
            var bin = $("#ewaste").attr('alt');
            
            // load a new image to the page for them to evaluate     
            random_image();
            
            // send the status and receptacle data to game2.php for validation and points update    
            $.ajax("game2.php",{
            data: {status:status, bin:bin},
            dataType: "json",
            success: function(data){
                $("#Correctness").html(data.correct);
                $("#points").html(data.points);
            }});

     });  
  
});       

</script>
</head>
    <body onload = "random_image()">
     <div id = "top">
     <a href="index.php"><img alt="RecycleHarvard" height="300" src="Images/logo.png" width="544"></a>
     </div>
     <p>Click on the proper receptacle (trash bin, single-stream recycling, or electronic recycling),
                 and gain one point per correctly sorted item!</p>
     <table class="center">
             <tr align = "center">
                <td id ="Correctness" style ="color:green"></td>
                <td id = "Learn More">Confused? Click<a href="game.php">here</a>to learn more!</td>
             <tr>    
                <td>
                    <img id="RandomItem" alt="Item to Sort" src=""/>                      
                </td>
             </tr>
             <tr id= "Caption" style="text-align:center"></tr>
                <td></td>
             <tr style="text-align:center">
                  <td id ="points"></td>
             </tr>    
     </table>               
             <div id = "bottom">
                <table>
                    <tr> 
                        <td><img id="trash" alt="trash" src="Images/trashcan.png"></td>
                        <td><img id="recycle" alt="recycle" src="Images/recyclingbin.png"></td>
                        <td><img id="ewaste" alt="e-waste" src="Images/ewaste.png"></td>
                    </tr>
                    <tr>
                        <td style ="text-align:center">Trash Can</td>
                        <td style ="text-align:center">Recycling Bin</td>
                        <td style ="text-align:center">Electronic Recycling</td>
                    </tr>
                </table>
                      <a href="singlestream.html">Single Stream Recycling</a>
                      |
                      <a href="erecycle.html">Electronic Recycling</a>
                      |
                      <a href="index.php">Home</a>
                      |
                      <a href="game.php">Play the game!</a>
                      |
                      <a href="login.php">Login!</a>
                      |
                      <a href="logout.php" style="font-weight: bold">Log Out</a>
                     
             </div>   
     </body>
  </html>   
 
