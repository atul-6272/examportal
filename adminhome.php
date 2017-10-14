<?php
	include("config/connection.php");
	session_start();
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
  					<li><a class="active" href="#home">Home</a></li>
                    <li><a href="users.php">View Users</a></li>
  					<li><a href="addques.php">Add Question</a></li>
  					<li><a href="delques.php">Delete Question</a></li>
  					
				</ul>

            </div>
            <div class="div5">
            </div>
            <div class="div6">
           		<p> &#169; 2016 AAC Technology</p>
           </div>
     </div>
                     
</body>
</html>