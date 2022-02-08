<?php
//include auth_session.php file on all user panel pages
include("header.php");
session_destroy();
?>
<link rel="stylesheet" href="css/registration.css">
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<div id="main-contents">
    <h1>Login</h1>
    <div id="form-div">
        <form id="form-container" method="post" name="login"> 
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="username" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="usernameHelp" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" value="Login" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
<?php
    }
?>
</body>
</html>