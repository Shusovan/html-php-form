
<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location:login.php');
    }
?>

<html>
    <head>
        <tittle>Home Page</tittle>
    </head>

    <body>
        <a href='logout.php'>Logout</a>
        <h3>Welcome  <?php echo $_SESSION['username']; ?></h3>
    </body>
</html>