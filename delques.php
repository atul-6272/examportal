<?php
 	include("config/connection.php");
	session_start();
	$sql="select * from question" ;
	$rs = mysqli_query($con,$sql);
	
	
?>
<html>
<head>
<title>Untitled Document</title>
<link href="ahome.css" rel="stylesheet" type="text/css">
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
            	<h2> Welcome Admin </h2>
            </div>
            <div class="div4">
            	<ul class="vmenu">
  					<li><a href="adminhome.php">Home</a></li>
                    <li><a href="users.php">View Users</a></li>
  					<li><a href="addques.php">Add Question</a></li>
  					<li><a class="active" href="delques.php">Delete Question</a></li>
  					
				</ul>

            </div>
            <div class="div5">
    			<table width="700px" border="1">
        			<tr>
            			<th> S.No </th>
                		<th> Question </th>
                		<th> Option 1</th>
                		<th> Option 2</th>
                		<th> Option 3</th>
                		<th> Option 4</th>
                		<th> Action </th>
             		</tr>
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
                		<td> <?php  echo $Q_es;?></td>
                		<td><?php  echo $opt_1;?></td>
                		<td><?php  echo $opt_2;?></td>
                		<td><?php  echo $opt_3;?></td>
                		<td><?php  echo $opt_4;?></td>
                		<td><a class="actionLinks" href="delete.php?del=<?php echo $S_No; ?>">Delete</a></td>
            		</tr>
            		<?php } ?> 
        	</table>
        </div>

              
</body>
</html>