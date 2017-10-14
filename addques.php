<?php
	include("config/connection.php");
	session_start();
	if(isset($_POST["addques"])){
      
	$sql="insert into question (ques,opt1,opt2,opt3,opt4) values('".$_POST["ques"]."','".$_POST["opt1"]."','".$_POST["opt2"]."','".$_POST["opt3"]."','".$_POST["opt4"]."')" ;
	$rs = mysqli_query($con,$sql);
	header("location:addques.php");
	
	}
?>
<html>
	<head> 
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
  					<li><a class="active" href="addques.php">Add Question</a></li>
  					<li><a href="delques.php">Delete Question</a></li>
  					
				</ul>

            </div>
<div class="div5">
    				<form method="POST">
        				<p>
        	  				<label> Question </label>
        	  					<input type="text" name="ques" size="50"><br>
       	
        	 				<label> Option 1 </label>
        	  					<input type="text" name="opt1" size="50"> <br>
               				<label> Option 2 </label>
        	  					<input type="text" name="opt2" size="50"> <br>
               				<label> Option 3 </label>
        	  					<input type="text" name="opt3" size="50"> <br>
               				<label> Option 4 </label>
        	  					<input type="text" name="opt4" size="50"> <br>
             				<input type="submit" name="addques" value="Add Question"> 
      				   </p>
          
					</form>
              </div>