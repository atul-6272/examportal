<?php
	include("config/connection.php");
	session_start();
?>
<html>
<head>

<title>student's homepage</title>
<link href="shome.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container">
			<div class="div1">
				<img src="online-exam-portal.jpg" width="1200" height="340">
			</div>
			<div class="div2">
				<ul class="ulmenu">
					<li><a href="shome.php">Home</a></li>
					<li><a href="#">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
            <div class="div3">
            	<h2> Welcome Student </h2>
            </div>
            <div class="div4">
            	<table>
                	<caption> Available Examinations </caption>
                    <tr>
                    	<th> Exam ID </th>
                        <th> Name of Exam </th>
                        <th> Valid Till </th>
                        <th> Status </th>
                    </tr>
                    <tr>
                    	<td> E01 </td>
                        <td><a href="test01.php"> HTML & CSS Exam</a> </td>
                        <td> 16/04/2016 </td>
                        <td> New </td>
                    </tr>
                    <tr>
                    	<td> E02 </td>
                        <td> <a href="test02">MS Office Exam </a></td>
                        <td> 16/04/2016 </td>
                        <td> New </td>
                    </tr>
                </table>
                <p> *Click on the Name of Exam to Start the Test </p>
            </div>
            <div class="div6">
           		<p> &#169; 2016 AAC Technology</p>
           </div>
                     
</body>
</html>