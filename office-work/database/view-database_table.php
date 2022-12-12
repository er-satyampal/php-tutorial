<?php include_once(__DIR__."/db/connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th, tr {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align: center;
}

</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>DOB</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Country</th>
    <th>Delete Data</th>
  </tr>
  <?php

// $sth = $connection->prepare("SELECT * FROM `students` LIMIT 2");
// $sth = $connection->prepare("SELECT * FROM `students` LIMIT 1, 3");
    $sth = $connection->prepare("SELECT * FROM `students`");

    $sth->setFetchMode(PDO:: FETCH_OBJ);

    $sth->execute();

    while($row = $sth->fetch()){

    echo "
    <tr>
      <td>".$row->id."</td>
      <td>".$row->f_name. " " .$row->l_name. "</td>
      <td>".$row->dob."</td>
      <td>".$row->e_mail."</td>
      <td>".$row->number."</td>
      <td>".ucwords($row->country)."</td>
    </tr>
    ";
    
    }
    ?>
</table>
</body>
</html> 