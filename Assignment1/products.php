<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .card-img-top{
            height:150px;
            width: 150px;
        }
        .card{
            margin: 10px 0px ;
        }
    </style>
  </head>
  <body>
    <?php
    include("nav.php");
    $product=[
        ["id"=>"1","pname"=>"Bag","price"=>"300","quantity"=>"5","image"=>"image/prod1.jpg"],
        ["id"=>"2","pname"=>"T shirt","price"=>"1200","quantity"=>"6","image"=>"image/prod2.jpg"],
        ["id"=>"3","pname"=>"watch","price"=>"2100","quantity"=>"12","image"=>"image/prod3.jpg"],
        ["id"=>"4","pname"=>"watch","price"=>"900","quantity"=>"45","image"=>"image/prod4.jpg"],
        ["id"=>"5","pname"=>"glasses","price"=>"850","quantity"=>"34","image"=>"image/prod5.jpg"],
        ["id"=>"6","pname"=>"Hat","price"=>"100","quantity"=>"2","image"=>"image/prod6.jpg"],
        ["id"=>"7","pname"=>"Jacket","price"=>"650","quantity"=>"4","image"=>"image/prod7.jpg"],
        ["id"=>"8","pname"=>"shoes","price"=>"550","quantity"=>"14","image"=>"image/prod8.jpg"],
        ["id"=>"9","pname"=>"hat","price"=>"400","quantity"=>"9","image"=>"image/prod9.jpg"],
        ["id"=>"10","pname"=>"watch","price"=>"350","quantity"=>"1","image"=>"image/prod10.jpg"]
    ];
    ?>
    <section class="container">
        <h2 class="text-center mt-4">PRODUCTS</h2>
    <div class="row">
        <?php foreach($product as $pro){?>
            <div class="col-sm-4">
                <div class="card">
                    <img src="<?php echo $pro['image'];?>" class="card-img-top mx-auto" >
                    <div class="card-body ">
                        <p class="card-text ">
                            <?php echo "<h5>Product name:".$pro["pname"]."</h5>";
                            echo "<h5>Price:".$pro["price"]."</h5>";
                            echo "<h5>Quantity:".$pro["quantity"];?>
                        </p>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>