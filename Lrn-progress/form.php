<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body{
            background-color:gray;
        }

    </style>
</head>
<body>
    <div>
    <pre>
    
        <form action="output.php" method="get">
            Name:     <input type="text"  placeholder="Enter your Full Name" name="username"> 
        
            Age:      <input type="number" placeholder=" Enter your Age" name="age" >
          
            Email-Id: <input type="email" placeholder="Enter your Email" name="email">

            Date:     <input type="date"   name="date">

                                                             <button type="submit">Submit</button>
        </form>
    </pre>
    </div>
</body>
</html>