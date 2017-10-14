<?php
 	include("config/connection.php");
	session_start();
	$sql="select * from question" ;
	$rs = mysqli_query($con,$sql);
	if(isset($_POST["btnsub"])){
		header("location:result.html");
	}
	
	
?>
<html>
<head>
<link href="test01.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container">
			<div class="div1">
				<img src="online-exam-portal.jpg" width="1200" height="340">
			</div>
			<div class="div2">
				<ul class="ulmenu">
					<li><a href="#">Home</a></li>
					<li><a href="#">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
            <div class="div3">
            	<h2> QUESTIONS </h2>
                
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
        <input type="submit" value="SUBMIT" name="btnsub">
</form>
              
</body>
</html>