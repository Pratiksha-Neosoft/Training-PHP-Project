<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      
    .row div{
        padding: 1px;
    }

    .btn{
        border-radius: 0;
        font-size: 30px;
    }  
    </style>
  </head>
  <body>
    <?php include("nav.php");?>
  <div class="container mt-3">
        <h2 class="text-center ">CALCULATOR</h2>
        <hr>
        <div class="row">
            <div class="col-7 bg-dark px-3 cal">
                <div class="row">
                    <div class="col-12 bg-dark">
                    <input type="text" name="calculation" id="calculation" class="form-control" style="padding: 10px;font-size: 30px;height: 50px;">
                    </div>
                </div>

                <div class="row ">
                    <div class="col-3 bg-dark">
                        <button class="btn btn-primary btn-block " onclick="display('1')">1</button>
                    </div>
                    <div class="col-3 ">
                        <button class="btn btn-primary btn-block " onclick="display('2')">2</button>
                    </div>
                    <div class="col-3 ">
                        <button  class="btn btn-primary btn-block " onclick="display('3')">3</button>
                    </div>
                    <div class="col-3 ">
                        <button class="btn btn-danger  btn-block " onclick="ClearData()">C</button>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-block " onclick="display('4')">4</button>
                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-block " onclick="display('5')">5</button>
                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-block " onclick="display('6')">6</button>
                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-success btn-block " onclick="display('-')">-</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-block " onclick='display("7")'>7</button>
                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-block " onclick='display("8")'>8</button>
                        </div>
                        <div class="col-3 ">
                            <button id="nine" class="btn btn-primary btn-block " onclick='display("9")'>9</button>
                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-success btn-block " onclick='display("*")'>*</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-block " onclick='display(".")'>.</button>
                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-block " onclick='display("0")'>0</button>
                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-block " onclick='display("+")'>+</button>
                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-success btn-block " onclick='display("/")'>/</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-block " onclick='CalculateValue()'>=</button>
                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-block " onclick='display("^")'>^</button>
                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-primary btn-block " onclick='display("(")'>(</button>
                        </div>
                        <div class="col-3 ">
                            <button class="btn btn-success btn-block " onclick='display(")")'>)</button>
                        </div>
                    </div>
            
            </div>
            
            <div class="col-5">
                <h3 class="text-info text-center">History</h3><hr width="90px">
                <div class="col-lg-12 text-center" id="history_log">
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="calculator.js"></script>

</body>
</html>