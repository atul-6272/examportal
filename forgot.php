<?php
	include("config/connection.php");
	if(isset($_POST["btnsub"])){
		header("location:f.html");
	}
	?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	

            
            <div class="1" style="margin-top:100px; margin-left:50px;">
            	<form method="POST">
                	<label> Enter Your Email-ID </label>
                    	<input type="email" name="email" required>
                        <input type="submit" name="btnsub" value="Submit">
                 </form>
             </div>
      </div>
               
       
</body>
</html>