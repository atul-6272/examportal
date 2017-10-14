<?php
	include("config/connection.php");
	if(isset($_POST["btnSub"])){
      
	$sql="insert into registration (fname,lname,dob,phn,email,username,pass) values('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["dob"]."','".$_POST["Phn"]."','".$_POST["email"]."','".$_POST["username"]."','".$_POST["pass"]."')" ;
	$rs = mysqli_query($con,$sql);
	header("location:r.html");
	
	}
?>
<html>
<head>
<link href="registration.css" rel="stylesheet" type="text/css">
	<script>
			function checkPass(){
				
				var txt1 = document.getElementById("pass").value;
				var txt2 = document.getElementById("cpass").value;
				
				if(txt1!=txt2){
					document.getElementById("msg").innerHTML="Enter Same Password";
					document.getElementById("cpass").focus=true;
					document.getElementById("cpass").style.background="red";
					document.getElementById("cpass").value="";
					return false;
				}
				else{
					return true;
				}
			}
		</script>
</head>

<body>
<div class="container">
<div class="div1">
<img src="online-exam-portal.jpg" width="1201" height="256" alt=""/> 
</div>
<div class="div2">
				<ul class="ulmenu">
					<li><a href="homepage.php">Home</a></li>
					<li><a href="admin.php">Admin login</a></li>
                    <li><a href="registration.php">Register</a></li>
					<li><a href="#">About Us</a></li>
				</ul>
			</div>
<div class="div3">
	<h2> Registration Form </h2>
</div>
<form method="POST">
<div class="div4">
	
	<table width="409">
    	
    	<tr>
    		<th colspan=2> <h4>Personal Information </h4>            </th>
		</tr>
        <tr>
        	<td width="80"> First Name </td>
        	<td width="313"> <input type="text" name="fname" size="30"></td> 
        </tr>
        <tr>
        	<td> Last Name </td>
        	<td> <input type="text" name="lname" size="30"></td>
		</tr>
        <tr>
        	<td> Date of Birth </td>
            <td><input type="date" name="dob" size="30"></td> 
        </tr>
       
        <tr>
        	<td> Contact Number </td>
            <td> <input type="text" name="Phn" maxlength="10" size="30"></td>
        </tr>
        </table> 
        
        </div>
<div class="div5">
        
        <table>
        <tr>
        	<th colspan="2"><h4> Login Information </h4> </td>
        </tr>
        <tr>
        	<td> Email-ID </td>
			<td> <input type="email"  size="30", name="email" required ></td>
        </tr>
        <tr>
        	<td> User Name </td> 
            <td> <input type="text" size="30" name="username" required></td>
        </tr>
        <tr>
        	<td> Password </td>
            <td> <input type="password" size="30" name="pass" required> </td>
        </tr>
        <tr>
        	<td> Confirm Password </td>
            <td> <input type="password" size="30" name="cpass"required> </td> 
        </tr>
    </table>
    

</div>
 
<div class="div6">
<input type="submit" value="Submit" name="btnSub" onclick="return checkPass();" />
                  </div>
                  </form>

</div>
</body>
</html>
