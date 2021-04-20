<?php
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body style="color: black"background="wonda2.jpg">

	<aside>
         <form action="#" method="GET" class="m-5">
           <nav id = "navbar">
             <div class="container">
               <ul>
                 <li><a href="">Home </a></li>
                 <li><a href="">About </a></li>
                 <li><a href="">Help </a></li>
               </ul>
             </div>
						 <div id="hi"style="font-size: 100px;  margin-top: 100px; text-align: center;  color: white">Welcome to Wishlist</div>

	<h1>This is the index website</h1>

	<br>
	<h1>
	Hello, <?php echo $user_data['user_name']; ?>
</h1>
</br>
<br></br>
<br></br>
<br></br>
<br></br>

	<a href="logout.php"><h1>logout</h1></a>
</body>
</html>
