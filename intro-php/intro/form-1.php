<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" href="style-1.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="div1">
    <pre>
      <form action="file-1.php" method="GET">

     Name:            <input type="text" placeholder="name"  name="name">

     Age:             <input type="date" name="age">

     Phone number:    <input type="number" placeholder="Phone number" name="number"  min="6000000000" max="9999999999">

     E-mail Id:       <input type="email" placeholder="E-mial I'd" name="email">

     Address:         <textarea type="text" placeholder="Address" name="address" rows="6"></textarea>

     Zip-code:        <input type="number" placeholder="zip code" name="zipcode" min="100001" max="999999">


     State :         <select name="state">
                        <option value='null'>-----Select State-----</option>
                        <option> Utterpredesh</option>
                        <option> Bihar</option>
                        <option> Haryana</option>
                        <option> Punjab</option>
                        <option> Uttrakhand</option>
                        <option> Goa</option>
                     </select> 


      <button type="submit"> Submit</button> <button type="reset">Reset</button>

    </pre>
    <div>
</form> 
</body>
</html>