<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #cbf0cb;">
  <a class="navbar-brand" href="index.php">Xbox <br> Reviews</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reviews.php">Reviews</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rankings.php">Rankings</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" style="margin-right: 5%;">
    <?php


if(empty($_SESSION["username"])) {
    echo('  <li class="nav-item">
                    <a href="login.php" class="nav-link"><button class="btn btn-outline-success" type="button" name="login" >Login</button></a>
            </li>
            <li class="nav-item">
                    <a href="registration.php" class="nav-link"><button class="btn btn-outline-success my-2 my-sm-0" type="button" name="login" >Register</button></a>
            </li>
            </div>
');
}else{
    echo('
    <li class="nav-item dropdown" style="width: 100%;">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: rgba(0,0,0,.5);">
      Profile
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <a class="dropdown-item" href="#">Profile Page</a>
      <a href="logout.php" class="nav-link"><button class="btn btn-outline-success my-2 my-sm-0" type="button" name="logout" >Logout</button></a>
    </div>
  </li>  ');
}
?>

    </form>
  </div>
</nav>


</div>
</nav>