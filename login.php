<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" type="text/css" rel="stylesheet">
    <link href="bootstrap/css/s2-docs.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
         require('condb.php');
         session_start();

         if(isset($_POST['username'])){
             // removes backslashes
             $username = stripslashes($_REQUEST['username']);
             // escape special charecters in a string 
             $username = mysqli_real_escape_string($con, $username);
             $password = stripslashes($_REQUEST['password']);
             $password = mysqli_real_escape_string($con, $password);

             // check is user existing in the database or not
             $query = "SELECT * FROM user WHERE username = '$username' AND password='".md5($password)."'";
             
             $result = mysqli_query($con, $query) or die(mysql_error());
             $rows = mysqli_num_rows($result);

             if ($rows == 1) {
                    $_SESSION['username'] = $username;
                    // Redirect user to index.php
                    header("Location: index.php");
             } else {
                 echo"<div class='form'>
                 <h3>Username/Password is incorrect.</h3>
                 <br>Click here to <a href='login.php'>Login</a>
                 </div> ";
             }

             } else {
                 
            
    ?>
            <div class="form">
                <h1>Log in</h1>
                <form action="" method="post" name="login">
                <input type="text" name ="username" placeholder="Username" require>
                <input type="password" name ="password" placeholder="Password" require>
                <input type="submit" name ="submit" value="login">
                </form>
                <p>Not registreed yet? <a href="registration.php">Register Here</a></p>
            </div>

        <?php } ?>
    
</body>
</html>