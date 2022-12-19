<?php

if(!ISSET($_REQUEST["uid"])){
  echo "Student ID is not Present";
  exit();
}else if (empty($_REQUEST["uid"])){
  echo "Student ID is empty";
  exit();
}else{
  require_once(__DIR__."/db/connection.php");
 
  $sth = $connection->prepare("SELECT * FROM `students` WHERE `id` = '{$_REQUEST["uid"]}' LIMIT 1");
  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth->execute();
  $std_data = $sth->fetch();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      form{
        border: 1px solid black;
        height: 500px;
        width: 400px;
        margin-left:300px;
       padding-top:40px;
       padding-left:40px;
      }
    </style>
</head>
<body>
  <pre>
    <form action="update.php" method="GET">
        <label for="First Name"> First Name </label>  

          <input type="text" placeholder="First Name" name="fname" value="<?= $std_data->f_name ?>">

        <label for="Last Name"> Last Name </label>    

         <input type="text" placeholder="Last Name" name="lname" value="<?= $std_data->l_name ?>">

        <label for="DOB"> Date of Birth </label>   

       <input type="date" placeholder="Date of Birth" name="dob" value="<?= $std_data->dob ?>">

        <label for="Email">Email</label>       

        <input type="email" placeholder="xyz@gmail.com" name="e_mail" value="<?= $std_data->e_mail ?>">

        <label for="Mobile Number">Mobile Number</label>  

        <input type="number" pla  `ceholder="Phone No." name="number" value="<?= $std_data->number ?>">

        
        <select name="country">
            <option value="pakistan" <?php if ($std_data->country == "pakistan"){ echo " selected";} ?>>Pakistan</option>
            <option value="chaina" <?php if ($std_data->country == "chaina"){ echo " selected";} ?>>Chaina</option>
            <option value="america" <?php if ($std_data->country == "america"){ echo " selected";} ?>>America</option>
            <option value="india" <?php if ($std_data->country == "india"){ echo " selected";} ?>>India</option>
            <option value="kanada" <?php if ($std_data->country == "kanada"){ echo " selected";} ?>>Kanada</option>
            <option value="russiya" <?php if ($std_data->country == "russiya"){ echo " selected";} ?>>Russiya</option>
         </select> 

        <input type="Submit" name="submit" value="submit">
        </form>
  </pre>
</body>
</html>