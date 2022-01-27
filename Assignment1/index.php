<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <?php
    include("nav.php");
    ?>
    <section class="container">
        <form>
            <h2 class="m-3">Registration Form</h2>
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" >
                <label class="form-check-label" >
                    male
                  </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" >
                <label class="form-check-label" for="flexRadioDefault1">
                    Female
                  </label>
            </div>
            </div>
                <input class="btn btn-success"  value="SUBMIT" type="button">
                <input class="btn btn-primary"  value="RESET" type="button">
            
        </form>

    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>