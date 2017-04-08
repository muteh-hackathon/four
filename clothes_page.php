<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Clothing Description</title>
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
        <h1>Clothing Description</h1>
        <cc>
        <p1>Please fill out the following section below the best that you can. </br></p1>
        <p1>All entries are optional and your submissions will be confidential</br></p1><br>   
        </cc>
        
        <form>
        <label>Shirt: </label>
        <select>
        <option> Yes </option> 
        <option> No </option>
        <option> N/A </option>
        <input type="color" name="firstname">
        </select><br>
        
        <label>Pants: </label>
        <select>
        <option> Yes </option> 
        <option> No </option>
        <option> N/A </option>
        <input type="color" name="firstname">
        </select><br>
        
        <label>Shoes: </label>
        <select>
        <option> Yes </option> 
        <option> No </option>
        <option> N/A </option>
        <input type="color" name="firstname">
        </select><br>
        
        <label>Hat: </label>
        <select>
        <option> Yes </option> 
        <option> No </option>
        <option> N/A </option>
        <input type="color" name="firstname">
        </select><br>
        </form>
        <p style="font-style:italic"; style="white-space: nowrap">
              <a href = home_page.php>Home</a> 
              <a href = wellness_page.php> Next </a>
        </p>
    </body>
</html>