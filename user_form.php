<?php 

    // user_form.php
    
    // jutum�rkide vahele input elemendi NAME
    //echo $_POST["email"];
    //echo $_POST["password"];
    
    $email_error = "";
    
    // kontrolli ainult siis kui kasutaja vajutab logi sisse nuppu
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    
        //Kontrollime kasutaja e-posti, et see ei ole t�hi
        if(empty($_POST["email"])) {
            $email_error = "Ei saa olle t�hi";
        }
        
        // Kontrolli parooli
    
    }

?>
<html>
    <head>
        <title>User login page</title>
    </head>
    <body>
        
        <h2>Login</h2>
        <form action="user_form.php" method="post">
            <input name="email" type="email" placeholder="E-post" > <?php echo $email_error; ?> <br><br>
            <input name="password" type="password" placeholder="Parool" > <br><br>
            
            <input type ="submit" value="Logi sisse">
        </form>
        
        <h2>Create user</h2>
        
    </body>
</html>