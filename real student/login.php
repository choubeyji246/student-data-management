<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <!-- <div class="header">
        <h2>Login</h2>
    </div> -->

    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <!-- <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        
        -->
        <header>
        
        <div class="side">
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
        <h1>GIET UNIVERSITY</h1></div>
    <div class="box">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="reg.php">Register</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </div>
      
    </header>
    <div class="container">
    
        <div class="left">
            <form action="">
            <h1>For students</h1>
           <legend class="heading">students</legend>
            <input type="text" placeholder="User name" name="username"> <br><br>
            <input type="password" placeholder="password" name="password">
            <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
            <p>
            Not yet a member? <a href="reg.php">Sign up</a>
        </p>
        <p size="12">
            <a href="admin/login.php">login as admin</a>
        </p>

        <!-- </form>
        </div>
        <div class="right">
            <form method="post" action="login.php">
            <h1>For Admin</h1>
            <legend class="heading">Admin</legend>
            <input type="text" placeholder="User id" name="username" height="50px"><br><br>
            <input type="password" placeholder="password" name>
            <br>
            <button type="submit" class="btn" name="login_admin">Login</button>
            
        </form>
        </div>
    </div>
    </form> -->
</body>

</html>