<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log in to Website</title>
        <style>
        
            body {
            background-image: url("homepagebackground2.jpg");
            width: auto;
            height: auto;
            }
            
            input {
                margin-bottom: 0.5em;
            }
            
             h1{
              font-size:70px;;
              margin-left: 33%; 
              margin-top: 1%;
           }
           
           h2{
              font-size:70px;;
              margin-left: 15%; 
              margin-top: 1%;
           }
           
           h3{
              font-size:70px;;
              margin-left: 33%; 
              margin-top: 1%;
           } 
            
            table
            {
              width: 872px ;
              margin-left: 27.5%; 
              margin-top: 18%;
            }
            
            td
            {
              font-size: 40px;
              margin-top: 10px;
              padding: 39px;
              text-align: center;
            }
            
        </style>
    </head>
    <body>
        <h1>Welcome to MUTEH</span>!</h1>
                
        <p style="color: red">
        <!--Placeholder for error messages-->
        </p>
        
        <table>
        <tr>
        <td><a href = donate_page.php> Donate </a></td>
        <td> <a href = report_page.php>Report</a></td>
        </tr>
        <tr>
        <td><a href = resources_page.php> Resources </a></td>   
        <td><a href = assistance.html> Assistance </a></tdd>
        </tr>
        <tr>      
        <td><a href = about.html> About </a></td>
        <td><a href = loginpage2.php> Log Out </a></td>
        </tr>
        </table>


        </body>
</html>
<?php
//$connection->close();
// place useful functions here
// examples: salt and hash a string
//           check to see if a username/password combination is valid
//           forward user or admin to the correct page

   function mysql_entities_fix_string($connection, $string)
  {
    return htmlentities(mysql_fix_string($connection, $string));
  }	

  function mysql_fix_string($connection, $string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return $connection->real_escape_string($string);
  }
?>