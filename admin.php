<?php
	include("config/connection.php");
	if(isset($_POST["admlogin"])){
      $check_admin="select * from admin where username='".$_POST["username"]."' and pass='".$_POST["pass"]."'";
      $rs = mysqli_query($con,$check_admin);
	  $count = mysqli_num_rows($rs);
      
     if($count>0){
		$_SESSION["username"] = $_POST["username"];
		header("location:adminhome.php");
	}
      else
      {
      	echo"<script> alert('Username or Password is incorrect!')</script>";
      }
	}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="alog.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container">
			<div class="div1">
				<img src="online-exam-portal.jpg" width="1200" height="340">
			</div>
			<div class="div2">
				<ul class="ulmenu">
					<li><a href="homepage.php">Home</a></li>
					<li><a href="admin.php">Admin login</a></li>
                    <li><a href="registration.php">Register</a></li>
					<li><a href="#">Feedback</a></li>
                    <li><a href="#">FAQs</a></li>
					<li><a href="#">About Us</a></li>
				</ul>
			</div>
 		    <div class="div3">
            	<form method="POST">
            	<table>
                	<tr>
                    	<th width="218" height="30"> Login Below </th>
                    </tr>
                    <tr>
                    	<td> Admin Username </td>
                    </tr>
                    <tr>
                    	<td> <input type="text" name="username"size="30" required></td>
                    </tr>
                    <tr>
                    	<td> Admin Password </td>
                    </tr>
                    <tr>
                    	<td> <input type="password" name="pass" size="30" required> </td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td><input type="submit" value="Login" name="admlogin"></td>
                    </tr>
                    
                </table>
           </form>
           </div>
            
       </div>
                  
</body>
</html>