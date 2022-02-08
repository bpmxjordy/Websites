<?php
//include auth_session.php file on all user panel pages
include("header.php");
?>

<head>
    <link rel="stylesheet" href="css/profile.css">
</head>

    <div id="main-contents">
        <div class="profile-contents">
            <div id="profile-pic"><?php echo $_SESSION['profile-picture']; ?></div>
            <h1 id="profile-name"><?php echo $_SESSION['username']; ?></h1>
        </div>

        <form id="post-form" >

        <?php
require('db.php');
// When form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $create_datetime = date("Y-m-d H:i:s");
    $query    = "INSERT into `users` (username, password, email, create_datetime)
                 VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
    $result   = mysqli_query($con, $query);
    if ($result) {
        echo "<div class='form'>
              <h3>You are registered successfully.</h3><br/>
              <p class='link'>Click here to <a href='login.php'>Login</a></p>
              </div>";
    } else {
        echo "<div class='form'>
              <h3>Required fields are missing.</h3><br/>
              <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
              </div>";
    }
} else {
?>

<div class="profile-contents">
    <div class="create-post-cont">
        <label for="exampleInputEmail1">Game title</label>
        <input type="text" name="game-title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Game Title">
        <div id="useremailspacing"></div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Review</label>
                <textarea name="" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
            <div id="useremailspacing"></div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Image link</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter link">
            </div>

            <div class="form-group">
            <label for="exampleFormControlTextarea1">Rating</label>
            <select name="rating">
                <option value="" disabled selected>Rating</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    
</div>
<?php
}
?>
    </div>



<body>

</body>
</html>