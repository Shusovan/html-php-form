<?php

session_start();

$db = mysqli_connect("remotemysql.com","kQCCeGKBNG","ENlJhvdHij"); //"forms") or die("could not connect to database");
mysqli_select_db($db,'kQCCeGKBNG');

if(isset($_POST['username']) || isset($_POST['password']))
{
    $name=$_POST['username'];
    $pass=$_POST['password'];


$query_1="SELECT * FROM reguser WHERE Username='$name' and Passkey='$pass'";
$results=mysqli_query($db,$query_1);
$n=mysqli_num_rows($results);

if($n==1)
{
    $_SESSION['username']=$name;
    header('location:index.php');
    
}
else
{
    header('location:login.php');
}

}
?>



<html>
<!--    <head>
        <tittle>Registration</tittle>
    </head>-->

    <body>
        <div class="container">
            <div class="header">

                 <h1>User Login</h1>

            </div>
            
            <form action="login.php" method="post">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" name="username" required>
                    </div>

                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" required>
                    </div>

                <button type="submit" name="user_login">Log In</button>
               
                <p>Not a user? <a href="registration.php"><b>Register here</b></a></p>
            </form>
            
        </div>
    </body>
</html> 

