<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Server</title>
    </head>
    <body>

        <h1>

            
        </h1>
        <h2>
        <?php if(strlen($name) <= 3) { 

            
                 echo 'Nome non valido'; } 
           
            
              
                 else  {

                    
                         echo $name; }

                if(str_contains($email, '@') && str_contains($email, '.') ){
                    echo $email
                }    else {
                    echo 'email non valida';
                }    
                    
            
        
        
           
        </h2>
    </body>
</html>