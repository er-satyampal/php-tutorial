<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="GET">
        User-Input : <input type="text" placeholder="Input Name" name="username">
     </form>
</body>
</html>

<?php

$name = "echo($_GET["username"])";

if (strlen($name) <= 0){
    echo '<span style="color:red">Please fill the name</span>';
}else if(is_numeric($name)){
    echo '<span style="color:red">Please use char to fill name</span>';
}else{
    echo '<span style="color:brown">'.$name.'</span>';
}