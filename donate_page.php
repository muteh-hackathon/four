<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Donate Page</title>
        <style>
        	p.indent{padding-left: 14.8em}
            body {
            background-image: url("background3.jpg");
            width: auto;
            height: auto;
            }
            
            input {
				font-size:22px;;
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
			margin-left: 0%;
			white-space: nowrap;
			}
            
            form
            {
			  font-size:22px;;
              width: 872px ;
              margin-left: 42.5%; 
              margin-top: 19%;
            }
            
        </style>
    </head>
    <body>
        <h1>Thanks for Donating</span>!</h1>
                
        <p style="color: red">
        <!--Placeholder for error messages-->
        </p>

       <form method="post" action="loginpage.php">
		 <label>Name: </label><br>
        <input type="text" name="name"> <br>
		<label>Email: </label><br>
        <input type="text" name="email"> <br>
		 <label>Billing address: </label><br>
        <input type="text" name="address"> <br>
		 <label>Credit card number: </label><br>
        <input type="text" name="cardnumber"> <br>
        <label>Enter amount to donate: </label><br>
        <input type="text" name="amount"> <br>
		<input type="submit" name="submit" value="  Donate  ">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href = home_page.php>Home</a>
		
        </form>
     

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