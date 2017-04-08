<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Location Page</title>
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
              margin-left: 33%; 
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
        <h1>Location Information</h1>
        <cc>
        <p1>Please fill out the following section below the best that you can. </br></p1>
        <p1>All entries are optional and your submissions will be confidential</br></p1><br>   
        </cc>
        <form action="/location_page.php">
        <label>Image of Location: </label>
        <input type="file" name="pic" accept="image/*"> <br>
        <label>Address: </label>
        <input type="text" name="firstname"> <br>
        <label>City: </label>
        <input type="text" name="lastname"> <br>
        <label>State: </label>
        <input type="text" name="lastname"> <br>
        <label>Zip Code: </label>
        <input type="text" name="lastname"> <br>
        </form>
        <p style="font-style:italic">
              <a href = home_page.php>Home</a> 
              <a href = traits_page.php> Next </a>
        </p>
    </body>
</html>