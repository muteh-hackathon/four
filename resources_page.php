<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resource page</title>
        <style>
        
            body {
            background-image: url("background3.jpg");
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
           
            p
			{
			font-size:30px;
			margin-left: 67%;
			white-space: nowrap;
			}
            
            form
            {
			  font-size:23px;;
              width: 872px ;
              margin-left: 42.5%; 
              margin-top: 20%;
            }
 
            
        </style>
    </head>
    <body>
        <h1> More Local Resources</span></h1>
                
        <p style="color: red">
        <!--Placeholder for error messages-->
        </p>
        

       <form>
        <a href = "http://www.muteh.org/"> MUTEH (Official Site)</a><br><br>
        <a href = "http://stewpot.org/">Stewpot Community Services</a><br><br>
        <a href = "http://stewpot.org/services/opportunity-center/"> The Opportunity Center </a><br><br>
        <a href = "http://www.salvationarmyusa.org/"> Salvation Army </a><br><br>
		<a href = "http://www.ymca.net/"> YMCA </a>
		</form>

		 <p style="font-style:italic"; style="white-space: nowrap">
              <a href = home_page.php>Home</a> 
        </p>    


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