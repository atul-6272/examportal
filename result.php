<?php
 	include("config/connection.php");
	session_start();
    
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
            <div class="divres">
            	<p> Your Result has been sent to your Registered Email-ID </p>
                <h3> Thank You!</h3>
                
            </div>
            
</body>
</html>
