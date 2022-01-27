<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

        .error{
            color: red;
        }
        input[type='text']{
            margin: 5px;
            height: 30px;
            padding-left: 10px;
            border-radius: 20px;
            width: 250px;
        }
        form{
            padding: 10px;
        }

    </style>

  </head>
  <body>
    <?php
    include("nav.php");
    error_reporting(0);
    if(isset($_POST['submit'])){
    $mailerr=$passerr="";
    $mail=$_POST['email'];
    $pass=$_POST['pass'];
    $pattern="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $pass_pattern="/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&-+=()])(?=\\S+$).{8, 20}/";
    $login_mail="pratikshakhedkar4@gmail.com";
    $login_pass="Pratiksha@2000";
    if(empty($mail))
    $mailerr="Mail is required!";
    elseif(!preg_match($pattern,$mail))
    $mailerr="Enter valid E-mail";
    elseif($mail!=$login_mail)
    $mailerr="Mail ID is Incorrect";
    if(empty($pass))
    //$passerr="Password is required!";
    //elseif(!preg_match($pass_pattern,$pass))
    $passerr="Password should contain at least 8-20 character,1 digit,1 upper case,1 lower case and 1 special character!";
    elseif($pass!=$login_pass)
    $passerr="Password is Incorrect";
    }
  ?>
    <section class="container">
    <form method="POST">
      <h3 class="p-3">LOGIN FORM</h3>
        <span class="error">* are required fields.</span><br>
        <table>
        <tr><td>Email: </td><td><input type="text" name="email" value="<?php echo $mail;?>"><span class="error">*<?php echo $mailerr;?></span><br></td></tr>
        <tr><td>Password: </td><td><input type="text" name="pass" value="<?php echo $pass;?>"><span class="error">*<?php echo $passerr;?></span><br></td></tr>
        <tr><td><input type="submit" name="submit" class="btn btn-success"></td><td><input type="reset" class="btn btn-info" value="Reset"></td></tr>
    </form>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>