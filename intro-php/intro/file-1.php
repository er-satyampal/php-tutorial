<?php


$name = "";
$age = "";
$number = "";
$email='';
$address='';
$zipcode='';
$state='';
//*
if(!ISSET($_GET['name'])){
    // Name is Empty or Not Set By User
}else{
    $name=$_GET['name'];
}

if(!ISSET($_GET['age'])){
    // Name is Empty or Not Set By User
} else{
    $age=$_GET['age'];
}

if(!ISSET($_GET['number'])){
    // Name is Empty or Not Set By User
} else{
    $number = $_GET['number'];
}

if(!ISSET($_GET['number'])){
    // Name is Empty or Not Set By User
} else{
    $email = $_GET['email'];
}

if(!ISSET($_GET['address'])){
    // Name is Empty or Not Set By User
} else{
    $address = $_GET['address'];
}

if(!ISSET($_GET['zipcode'])){
    // Name is Empty or Not Set By User
} else{
    $zipcode = $_GET['zipcode'];
}

if(!ISSET($_GET['state'])){
    // Name is Empty or Not Set By User
} else{
    $state = $_GET['state'];
}


?>

<html>
    <head>
      <link rel="stylesheet" href="style-2.css">
      

    </head>

    <body>
        <tr>
            <td>
                &nbsp;
            </td>
            <td>
                &nbsp;
            </td>

        </tr>
         <table border="2">

            <tr  class='clr-one' >
                 <td>1</td>
                 <td>name</td>
                       <td> 
                       <?php echo $name; ?>

                       </td>
                    </tr>    
            <tr  class="clr-two"> 
                    <td>2</td>
                    <td>Age</td>
                       <td> 
                        <?php echo $age; ?>
                    </td>
                </tr>    
            <tr class="clr-one"> 
                    <td>3</td>
                    <td>phone number</td>
                    <td>
                        <?php echo $number; ?>
                    </td>
                </tr>    
            <tr class="clr-two"> 
                    <td>4</td>
                    <td>E-mail</td>
                    <td>
                        <?php echo $email; ?>
                    </td>
                </tr>    
            <tr class="clr-one"> 
                    <td>5</td>
                    <td>Address</td>
                    <td>
                        <?php echo $address; ?>
                    </td>
                </tr>    
            <tr class="clr-two"> 
                    <td>6</td>
                    <td>ZIP-Code</td>
                    <td>
                        <?php echo $zipcode; ?>
                    </td>
                </tr>    
            <tr class="clr-one">   
                <td>7</td>
                <td>State</td>  
                    <td>
                        <?php echo $state; ?>
                    </td>

             </tr>
         </table>
    </body>
</html>
