<?php
	include("config/connection.php");
	session_start();
	
	
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
            	<h3> Instructions </h3>
                <ol class="olinst">
                	<li> The test contains 15 questions </li>
                    <li> You will have 30 minutes to solve the question paper </li>
                    <li> The test will be of objective type of questions </li>
                    <li> Procedure for answering a multiple choice type question </li>
                    	<ol type="a">
                        	<li> To select your answer, click on the button of one of the option.</li>
                            <li> To change your choosen answer, click on the button of another option. </li>
                        </ol>
                    <li> This is a mock test and all the questions are compulsory</li>
                    <li> Each question is allocated 1(one) mark for each correct answer.</li>
                    <li> There will be no negative marking for wrong response.</li>
                    <li> There is only one correct option for each question.</li>
                </ol>
                <br />
                <h3> Declaration</h3>
                <p> I have read and understood the instructions. I declare that I am not in possesion of/not wearing/ not carrying any prohibited gadget like mobile phones, bluetooth device etc. I agree that in case of not adhering to the instruction I shall be liable to be debarred from this test and/or to disciplinary action, which may include ban from future tests/examinations. </p>
               <a href="questions.php"><input type="submit" name=""Startbtn" value="Start Test" /> </a>
         </div>
       </div>
         
</body>
</html>