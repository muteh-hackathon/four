<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Wellness Information</title>
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
              margin-left: 34%; 
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
        <h1>Wellness Information</h1>
        <cc>
        <p1>Please fill out the following section below the best that you can. </br></p1>
        <p1>All entries are optional and your submissions will be confidential</br></p1><br>   
        </cc>
        <form action="/picture_page.php">
        <label>Disability: </label>
        <input type="radio" name="rating1" value="1"> 1
        <input type="radio" name="rating1" value="2"> 2
        <input type="radio" name="rating1" value="3"> 3
        <input type="radio" name="rating1" value="4"> 4
        <input type="radio" name="rating1" value="5" checked> 5<br>
        <label>Description: </label>
        <input type="textbox" name="firstname"> <br>
        
        <label>Living status: </label>
        <input type="radio" name="rating1" value="1"> 1
        <input type="radio" name="rating1" value="2"> 2
        <input type="radio" name="rating1" value="3"> 3
        <input type="radio" name="rating1" value="4"> 4
        <input type="radio" name="rating1" value="5" checked> 5<br>
        <label>Description: </label>
        <input type="textbox" name="firstname"> <br>
        
        <label>Interaction: </label>
        <input type="textbox" name="firstname"> <br>
        
        </form>
        <p style="font-style:italic"; style="white-space: nowrap">
              <a href = home_page.php>Home</a> 
              <a href = home_page.php> Finish </a>
        </p>
    </body>
</html>