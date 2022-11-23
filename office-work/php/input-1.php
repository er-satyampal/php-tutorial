<?php

// echo " Product Cost:- ".($_GET["p_cost"])."₹"."<br />"; 

// echo "Tax:- ".($_GET["tax"])."%"."<br />";  

// // echo "Discount:- ".($_GET["discount"])."%"."<br />"; 
// echo ("<hr>");

$a =($_GET["p_cost"]);
$b =($_GET["tax"]);
$c =($_GET["discount"]);

 $d = ($a+($a*$b)/100);    //Taxable amount

 $e = ($d-($d*$c)/100); // Discountable Amount

//  echo "Taxable Amount :- ".(($a*$b)/100)."₹";
//  echo "<br  />";
//  echo "Discountable Amount :- ".(($d*$c)/100)."₹"."<br  />";
  
// echo ("<hr>");

// echo "Final Payment :- ".($d-($d*$c)/100)."₹"; 

// html starts ________________+ From Here 


?> 
 <html>
    <head>
<style>
    *{
    }
    table{
        margin-left:150px; 
        margin-top:100px;
        border-cosllapse: collapse;
        width:400px;
        
    }
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
.td-1{
    width:70%;
}

.td-2{
    width:30%;
}
</style>
    </head>
</html>
 <body>
    <table>
        <tr>
            <td class="td-1" colspan="3" > <?php echo " Product Cost"; ?> </td>
            <td class="td-2" ><?php echo ($_GET["p_cost"])."₹"; ?> </td>
        </tr>
    
        <tr>
            <td  class="td-1"  colspan="3" >  <?php echo "Tax"; ?></td>
            <td  class="td-2">  <?php echo ($_GET["tax"])."%"; ?></td>
        </tr>
        <tr>
            <td class="td-1" colspan="3" > <?php echo "Discount";  ?> </td>
            <td class="td-2"> <?php echo($_GET["discount"])."%";  ?> </td>
        </tr>
        <tr>
                <td rowspan="3"></td>
                <td><?php echo "Taxable Amount"; ?></td>
                <td> <?php echo (($a*$b)/100)."₹"; ?>  </td>
        </tr>
        <tr>
               <td> <?php echo " Discount Amount"; ?> </td>
               <td> <?php echo (($d*$c)/100)."₹"; ?>  </td>
        </tr>
        
        <tr>
               <td> <?php echo "Final Payment "; ?> </td>
               <td><?php echo ($d-($d*$c)/100)."₹"; ?> </td>
        </tr>
    </table>
 </body>
