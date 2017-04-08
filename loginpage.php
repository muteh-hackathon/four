<!<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log in to Website</title>
        <style>
            input {
                margin-bottom: 0.5em;
            }
        
            body {
            background-image: url("background3.jpg");
            width: auto;
            height: auto;
            }
            
             h1{
              font-size:70px;;
              margin-left: 33%; 
              margin-top: 1%;
           } 
            
            form
            {
              font-size:20px;
              width: 1100px ;
              margin-left: 42%; 
              margin-top: 24%;
            }
            
            a
            {
              font-size:20px;
              width: 1100px ;
              margin-left: 42%; 
              margin-top: 24%;
            }
        </style>
    </head>
    <body>
        <?php
        
        session_start();
          // Is someone already logged in? If so, forward them to the correct
          // page. (HINT: Implement this last, you cannot test this until
          //              someone can log in.)
          if($_SERVER["REQUEST_METHOD"]=="POST"){
            require_once 'login.php';
            $connection = new mysqli($hn, $un, $pw, $db);
          if ($connection->connect_error){ 
            die($connection->connect_error);}
          if (isset($_POST['username']) && isset($_POST['password']))
          {
            $un_temp = mysql_entities_fix_string($connection, $_POST['username']);
            $pw_temp = mysql_entities_fix_string($connection, $_POST['password']);
        
            $query  = "SELECT * FROM Login WHERE username='$un_temp'";
            
            $result = $connection->query($query);
            if (!$result) 
              die($connection->error);
              
            elseif ($result->num_rows)
              {
              $row = $result->fetch_array(MYSQLI_NUM);

		        $result->close();

              $salt1 = "qm&h*";
              $salt2 = "pg!@";
              $token = hash('ripemd128', "$salt1$pw_temp$salt2");
              $_SESSION['username'] = row[0];
              
              if($token == $row[4]){
                     echo"user logged in";
                     header('Location: user_page.php');
                     exit();
                 }
              else{
                 echo "Invalid username/password combination";
                 }
              }
          else {
            echo"Invalid username/password combination";
          }
        }
        else {
            echo"Please enter your username and password";
          }
        }
          
          
          // Were a username and password provided? If so check them against
          // the database.
          
          
          //      If username / password were valid, set session variables
          //      and forward them to the correct page
          
          
          //      If the username / password were not valid, show error message
          //      and populate form with the original inputs
          
          
        ?>
        <h1>Welcome to MUTEH</span>!</h1>
                
        <p style="color: red">
        <!--Placeholder for error messages-->
        </p>
        
        <form method="post" action="loginpage.php">
            <label>Username: </label>
            <input type="text" name="username"> <br>
            <label>Password: </label>
            <input type="password" name="password"> <br>
            <input type="submit" value="Log in">
        </form>
        
        <p style="font-style:italic">
             header('Location: createaccount_page.php');
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
?>