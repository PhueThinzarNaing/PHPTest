<!DOCTYPE HTML>  
<html>
<head>
<title></title>
<style>
  
</style>
</head>
<body>  


<h2></h2>

<table border="1">

<?php
 for($k=1;$k<=8;$k++)
 {
     echo "<tr>";
     
     for($i=1;$i<=8;$i++)
     {   
       $c=$k+$i;
      if($c%2==0){

        echo "<td style=background-color:#000000 width=50px height=50px;></td>";

      }else 
      echo "<td style=background-color:#ffffff width:50px height:50px;></td>";     
      
     }
     
       
     echo "</tr>";
 }

 ?>
</table>
</body>
</html>
