<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Traits Page</title>
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
              font-size:70px;
              margin-left: 38%; 
              margin-top: 1%;
              padding-bottom: 18%;
           } 
            
            p1
            {
              font-size:30px;
              margin-left: 29%; 
              margin-top: 0%;
            }
            
            form
            {
              font-size:30px;
              margin-left: 29%; 
              margin-top: 0%;
            }
            
            cc
            {
              text-align: center;
            }
            
            a
            { 
              font-size:30px;
              margin-left: 67%;
            }
            
          </style>
      </head>
      <body>     
        <!-------------------------------Form Data------------------------------->
        <h1>Physical Traits</h1>
        <cc>
        <p1>Please fill out the following section below the best that you can. </br></p1>
        <p1>All entries are optional and your submissions will be confidential</br></p1><br>   
        </cc>
        
        <form>
        <label>Ethnicity: </label>
        <input type="text" name="firstname"> <br>
        
        <label>Age: </label>
        <select>
        <?php for ($i=1; $i<=100; $i++) { ?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php } ?>
        </select><br>
        
        <label>Gender: </label>
        <input type="text" name="firstname"> <br>
        <label>Hair Color: </label>
        <input type="text" name="lastname"> <br>
        <label>Eye Color: </label>
        <input type="text" name="firstname"> 
        </form>
        <p style="font-style:italic"; style="white-space: nowrap">
              <a href = home_page.php>Home</a> 
              <a href = clothes_page.php> Next </a>
        </p>
    </body>
</html>