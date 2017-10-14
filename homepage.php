<?php
	include("config/connection.php");
	if(isset($_POST["login"])){
      $check_user="select * from registration where username='".$_POST["username"]."' and pass='".$_POST["pass"]."'";
      $rs = mysqli_query($con,$check_user);
	  $count = mysqli_num_rows($rs);
      
     if($count>0){
		$_SESSION["username"] = $_POST["username"];
		header("location:shome.php");
	}
      else
      {
      	echo"<script> alert('Username or Password is incorrect!')</script>";
      }
	}
?>
<html>
	<head>
	<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="div1">
				<img src="online-exam-portal.jpg" width="1200" height="340">
			</div>
			<div class="div2">
				<ul class="ulmenu">
					<li><a href="#">Home</a></li>
					<li><a href="admin.php">Admin login</a></li>
                    <li><a href="registration.php">Register</a></li>
					<li><a href="#">About Us</a></li>
				</ul>
			</div>
            <div class="div3">
            	<h2> Welcome To Online Examination Portal</h2>
            </div>
            <div class="div4">
            	<h3> Introduction </h3>
                <ul>
                	<li> Online examinations are conducted through the internet or in an intranet (if within the Organization) to test a remote candidate .</li>
                	<li>Candidate is given a limited time to answer the questions and after the time expiry the answer paper is disabled automatically and answers is sent to the examiner.</li>
                	<li>The examiner will evaluate answers, either througha utomated process or manually and the results will be sent to the candidate through email or made available in the website.</li>
                </ul>
            </div>
            <div class="div5">
            	<form method="POST">
            	<table>
                	<tr>
                    	<th width="218" height="30"> Login Below </th>
                    </tr>
                    <tr>
                    	<td> Username </td>
                    </tr>
                    <tr>
                    	<td> <input type="text" name="username"size="30" required></td>
                    </tr>
                    <tr>
                    	<td> Password </td>
                    </tr>
                    <tr>
                    	<td> <input type="password" name="pass" size="30" required> </td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td><input type="submit" value="Login" name="login"></td>
                    </tr>
                    <tr>
                    	<td height="28"><a href="forgot.php">Forgot Password?</a> </td>
                    </tr>
                    <tr>
                    	<td height="29"> New User - <a href="registration.html">Register here</a> </td>
                    </tr>
                </table>
           </form>
           </div>
           <div class="div6">
           		<p> &#169; 2016 AAC Technology</p>
           </div>
       </div>
                
	</body>
</html>