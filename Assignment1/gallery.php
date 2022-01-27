<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Image Gallery</h2>
<?php
$sc=scandir("image");
print_r($sc);
foreach($sc as $c){
    if($c!='.' && $c!="..")
    echo "<img src='image/$c' width=200 height=200>";
}
?>
</body>
</html>