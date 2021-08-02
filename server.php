<?php

    session_start();

    $db = mysqli_connect("remotemysql.com","kQCCeGKBNG","ENlJhvdHij"); //"forms") or die("could not connect to database");
    mysqli_select_db($db,'kQCCeGKBNG');

    if(isset($_POST['username']) || isset($_POST['password']))
    {
        $e=$_POST['email'];
        $s=$_POST['phone'];
        $name=$_POST['username'];
        $pass=$_POST['password'];


    $query_1="SELECT * FROM reguser WHERE Username='$name'";
    $results=mysqli_query($db,$query_1);
    $n=mysqli_num_rows($results);

    if($n==1)
    {
        echo"username exist";
    }
    else
    {
        $reg="INSERT INTO reguser(Email,Phone,Username,Passkey)VALUES('$e','$s','$name','$pass')";
        mysqli_query($db,$reg);
        echo"Registration Successful";
    }

    }
/*    
$name="";
    $email="";
    $username="";
    $password_1="";
    $password_2="";

    $error=array();

    $db = mysqli_connect("localhost","root","Alliance@123","forms") or die("could not connect to database");

    if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['username']) || isset($_POST['password_1']) || isset($_POST['password_2']))
    {
        $name=mysqli_real_escape_string($db,$_POST['name1']);
        $email=mysqli_real_escape_string($db,$_POST['Email']);
        $username=mysqli_real_escape_string($db,$_POST['username']);
        $password_1=mysqli_real_escape_string($db,$_POST['password_1']);
        $password_2=mysqli_real_escape_string($db,$_POST['password_2']);
    }
    
    //form validation

    if(empty($email))
    {
        array_push($error,"Email is required");
    }

    if(empty($username))
    {
        array_push($error,"Username is required");
    }

    if(empty($password_1))
    {
        array_push($error,"Password id required");
    }

    if($password_1 != $password_2)
    {
        array_push($error,"Password do not match");
    }

    $query_1="SELECT * FROM users WHERE Username='$username' LIMIT 1";
    $results=mysqli_query($db,$query_1);
    $user=mysqli_fetch_assoc($results);

    if($user)
    {
        if($user["Username"]===$username)
        {
            array_push($error,"Username already exist");
        }

        if($user["Email"]===$email)
        {
            array_push($error,"This Email already exist");
        }
    }

    if(count($error)==0)
    {
        $password=md5($password_1);
        $query_2="INSERT INTO User(Name1,,Email,Username,Passkey)VALUES('$name','$email','$username','$password')";
        mysqli_query($db,$query_2);
        $_SESSION["Username"]=$username;
        $_SESSION["success"]="Login Successful";

        header("location:home.php");
    }

*/
