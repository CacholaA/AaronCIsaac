<!--Below is the code that links to my config.php file-->
<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<!--This is the code that is the visual part of my registration form-->

<center><h1>Register</h1></center>
<body background="http://www.lionheart-designs.com/inventory/jigsaw%20puzzles/Entertainment/Superheroes.JPG">
        

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <!--Below is my email text area-->
    
    <!--Below is my username text area-->
    <div>
        <center>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
        </center>
        
    </div>
    <!--Below is my password text area-->
    <div>
        <center>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
        </center>
    </div>
    <!--Below is my submit button which send the above code to my database-->
    <div>
        <center>
        <button type="submit">Submit</button>
        </center>
    </div>
</form> 