<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Account</title>
        <style>
            input {
                margin-top: 0.5em;
                font-size: 20px;
            }
            .error {
            color: #FF0000;
            }
            
            body {
              background-image: url("background3.jpg");
              width: auto;
              height: auto;
            }
            
           h1{
              font-size:70px;;
              margin-left: 37%; 
              margin-top: 1%;
           } 
            
            form
            {
              font-size:20px;
              width: 1100px ;
              margin-left: 37%; 
              margin-top: 19%;
            }
          </style>
      </head>
      <body>
      <?php
      require_once 'login.php';
      $connection = new mysqli($hn, $un, $pw, $db); 
      if ($connection->connect_error) 
        die($connection->connect_error);
      
      session_start();

      
      /*-----------------Checks If User Is Already Logged In-----------------*/
      /*This is here to stop already logged in users from creating an account, they will have to log out first. We should
      probably print a message out or something saying why they can't create an account lol*/
        
       
      /*---------If User Is Not Already Logged In Wait On Creation Info-------*/ 
      /*----------Initial Variable Declaration-------------*/  
      $username = "";
      $usernameERR = "";
      
      $firstname = "";
      $firstnameERR = "";
      
      $lastname = "";
      $lastnameERR = "";
      
      $email = "";
      $emailERR = "";
      
      $password = "";
      $passwordERR = "";
      
      
      /*------------------Waition on user input-------------*/
      if($_SERVER['REQUEST_METHOD'] == "POST")
      {
          /*-------Sets user input equal to appropriate variable------*/
          $username  = $_POST['username'];
          $firstname  = $_POST['firstname'];
          $lastname  = $_POST['lastname'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          
           
          /*-----------Error statements for inproper input----------*/ 
          if (strlen($username) < 6) //Checks if username is at least 6 characters
            $usernameERR = "Your username must be 6 or more characters";//SIDE NOTE: NEED TO CHECK IF IT IS ALREADY TAKEN
          
          if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) //Makes sure name consists of letters
            $firstnameERR = "Your first name must consist of letter and white space";
            
          if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) //Makes sure name consists of letters
            $lastnameERR = "Your last name must consist of letter and white space";
           
          if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $email))//Checks for valid email info
            $emailERR = "Invalid phone number format";
            
          if (strlen($password) < 6) //Makes sure password is at least 6 characters
            $passwordERR = "Your password must be 6 or more characters";

           if($usernameERR == "" && $firstnameERR == "" && $lastnameERR == "" && $emailERR == "" && $passwordERR == "")
          {
            $salt1    = "qm&h*";
            $salt2    = "pg!@";
            $type       = 'user'; //Type should default to user because all created accounts are users, admins must be created by other admins
            $token    = hash('ripemd128', "$salt1$password$salt2"); //Hashes the password
            add_user($connection, $username, $firstname, $lastname, $email, $type, $token); //Calls create account function
            //$_SESSION['user'] =  1; //I haven't implemented yet but my plan is located below
          }
      }
      $connection->close(); //Closes the connection to the data base
    ?>
        <!-------------------------------Form Data------------------------------->
        <h1>Account Creation</h1>
        <p><span class="error"></span></p> <!--All info required print statement-->
        <form method="post"  action="createaccount_page.php"> 
        
            <!--
            I was thinking about having a drop down box with Mr., Ms., or Mrs. to store in the data base. I know amazon does this it'll help us properly address them 
            if we ever have to send them information. It'll be pretty easy to implement so its on you guys if you want it our not just let me know
            --> 
        
            Username: <input type="text" size="35" name="username" placeholder="Username" value="<?php echo $username ?>" > <!--Asks for username-->
            <span class="error"><?php echo "<br>" .  $usernameERR ?></span>
            <br>
           
            First Name: <input type="text" size="34" name="firstname" placeholder="First Name" value="<?php echo $firstname ?>" > <!--Asks for firstname-->
            <span class="error"><?php echo "<br>" .  $firstnameERR ?></span>
            <br>
            
            Last Name: <input type="text" size="34" name="lastname" placeholder="Last Name" value="<?php echo $lastname ?>" > <!--Asks for lastname-->
            <span class="error"><?php echo "<br>" . $lastnameERR ?></span>
            <br>
            
            Phone Number: <input type="text" size="31" name="email" placeholder="Phone Number" value="<?php echo $email ?>"> <!--Asks for email-->
            <span class= "error"><?php echo "<br>" . $emailERR; ?></span>
            <br>
            
            Password: <input type="password" size="35" name="password" placeholder="Password"value="<?php echo $password ?>"> <!--Asks for password-->
            <span class= "error"><?php echo "<br>" . $passwordERR; ?></span>
            <br>
            
            <input type="submit" name="submit" value="submit">  <!--Submission button

        </form>
    </body>
</html>

<?php
  /*----------------------Add User Function----------------------------*/
  function add_user($connection, $un, $fn, $ln, $em, $ty, $pw)
  {
    $query  = "INSERT INTO Login (username, firstname, lastname, phonenumber, password) "
            . "VALUES('$un', '$fn', '$ln', '$em', '$pw')";
    $result = $connection->query($query);
    if (!$result) die($connection->error);
  }
?>

