<?php
 	include("config/connection.php");
	session_start();
	$sql="select * from registration" ;
	$rs = mysqli_query($con,$sql);
	
?>
<html>
<head>

<title>admin's homepage</title>
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
                    <li><a class="active" href="users.php">View Users</a></li>
  					<li><a href="addques.php">Add Question</a></li>
  					<li><a href="delques.php">Delete Question</a></li>
  			
				</ul>

            </div>
            <div class="div5">
            	<table border="1">
	   					<tr>
							<th> Full Name </th>
							<th> Date of Birth </th>
							<th> Contact </th>
							<th> Email-ID </th>
							<th> UserName </th>
                            <th> Password </th>
						</tr>
                        <?php
							$i=0;
							$color="";
							while($result = mysqli_fetch_array($rs))
							{
								if($i%2==0)
							{
								$color="grey";
							}
								else{
								$color="red";
							}
						?>
						
						<tr>
								<td> <?php  echo $result['fname'];?> <?php  echo $result['lname'];?> </td>
								<td> <?php echo $result['dob'];?></td>
								<td> <?php echo $result['phn'];?></td>
								<td> <?php echo $result['email'];?></td>
                                <td> <?php echo $result['username'];?></td>
                                <td> <?php echo $result['pass'];?></td>
								
						</tr>
                        <?php $i++;} ?>
						
				</table>
            </div>
            <div class="div6">
           		<p> &#169; 2016 AAC Technology</p>
           </div>
     </div>
                     
</body>
</html>