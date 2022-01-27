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
        input[type='text'],input[type="email"]{
            margin: 5px;
            height: 30px;
            padding-left: 10px;
            border-radius: 20px;
            width: 250px;
        }
        textarea{
            resize: none;
            margin: 5px;
            border-radius: 20px;
            padding: 10px;
        }
        form{
            padding: 10px;
        }

    </style>
  </head>
  <body>
    <?php
    include("nav.php");
    ?>
    <section class="container">
    <?php
    error_reporting(0);
    $nameerr=$mailerr=$feederr=$mobileerr="";
    $pattern="/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $mobile_pattern="/^[6-9][0-9]{9}$/";
    if(isset($_POST['submit'])){
    $nam=input_field($_POST['name']);
    $mobile=input_field($_POST['mobile']);
    $mail=input_field($_POST['email']);
    $feed=input_field($_POST['feed']);
  
    if(empty($nam))
    $nameerr="Name is required!";
    else if(!preg_match("/^[a-zA-Z]+$/",$nam))
    $nameerr="Only alphabet allowed";
    if(empty($mobile))
    $mobileerr="Mobile No. is required!";
    else if(!preg_match($mobile_pattern,$mobile))
    $mobileerr="Enter valid Mobile number";
    if(empty($mail))
    $mailerr="Mail is required!";
    else if(!preg_match($pattern,$mail)){
    $mailerr="Enter valid E-mail";
    }
    if(empty($feed))
    $feederr="Feedback is required!";
    if (!empty($feed)) {  
        $length = strlen($feed);  
        if ( $length < 10 || $length > 50) {  
            $feederr= "Feedback should contain at least 10 and at most 50 characters.";    
        }
    }  
    if($nameerr=="" && $mailerr=="" && $feederr==""){
        echo"<br><marquee><h4 style='color:green;'> Registered Successfully</h4></marquee>";
        $nam="";
        $mail="";
        $feed="";
        
    }
}

function input_field($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>
    <center><br><h2 style='color:dodgerblue;'><u>Feedback Form</u></h2></center>
    <form method="POST">
        <span class="error">* are required fields.</span><br>
        <table>
        <tr><td>Name: </td><td><input type="text" name="name" value="<?php echo $nam;?>"><span class="error">*<?php echo $nameerr;?></span><br></td></tr>
        <tr><td>Mobile: </td><td><input type="text" name="mobile" value="<?php echo $mobile;?>"><span class="error">*<?php echo $mobileerr;?></span><br></td></tr>
        <tr><td>Email: </td><td><input type="text" name="email" value="<?php echo $mail;?>"><span class="error">*<?php echo $mailerr;?></span><br></td></tr>
        <tr><td>Feedback:</td><td><textarea name="feed" rows="7" cols="30" ><?php echo $feed;?></textarea><span class="error">*<?php echo $feederr;?></span></td></tr>
        <tr><td><input type="submit" name="submit" class="btn btn-success"></td></tr>
    </form>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>