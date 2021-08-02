<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<!--    <head>
        <tittle>Registration</tittle>
    </head>-->
    <body>
       <div classes="container">
           <div class="header">
               <h2>Registration Form</h2>
           </div>

           <form action="registration.php" method="post">

                <div>
                   <label for="username">Username</label>
                   <input type="text" name="username" required>
               </div>

               <div>
                   <label for="email">Email ID</label>
                   <input type="email" name="email" required>
               </div>

               <div>
                   <label for="phone">Phone No.</label>
                   <input type="phone" name="phone" required>
               </div>

               

               <div>
                   <label for="password">Password</label>
                   <input type="password" name="password" required>
               </div>

            <button type="submit"> Submit </button>
            <a href="login.php"><b>Login</b></a>
        
        </form>

    </body> 
</html>