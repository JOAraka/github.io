<?php
  echo "<html>
            <head><title><php added edit</title></head>
            <body>
            
            <form>
              <input type="text" name="names" method= "post" placeholder="what is your name"/>
              <input type="submit" name= "submit" value= "submit"/>
              
            </form>
            </body>
         </html> "; 
if ($_POST ["submit"]= "submit")
{
echo " Welcome to php. ";echo $_POST ["names"];
}
else
{
  echo
    "Hello world":
}
  ?>
