<?php
 	include("config/connection.php");
	session_start();
	$sql="select * from question" ;
	$rs = mysqli_query($con,$sql);
	
	
?>
<html>
<head>
<title>Untitled Document</title>
</head>

<body>
	<form>
    	<table width="700px">
        		<?php 
					while($row=mysqli_fetch_array($rs))  
            		 {  
           				 $S_No=$row[0];  
           				 $Q_es=$row[1];  
            		     $opt_1=$row[2];  
            			 $opt_2=$row[3];
						 $opt_3=$row[4];
						 $opt_4=$row[5];  
  
  
  
               ?> 
        	<tr>
            	<td> <?php  echo $S_No;?></td>
                <td colspan="4"> <?php  echo $Q_es;?></td>
            </tr>
            <tr>
            	<td></td>
                <td><input type="radio" name="option"><?php  echo $opt_1;?></td>
                <td><input type="radio" name="option"><?php  echo $opt_2;?></td>
                <td><input type="radio" name="option"><?php  echo $opt_3;?></td>
                <td><input type="radio" name="option"><?php  echo $opt_4;?></td>
            </tr>
            <?php } ?> 
        </table>
</form>
              
</body>
</html>