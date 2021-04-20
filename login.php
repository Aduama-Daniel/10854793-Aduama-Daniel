<?php

session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];

		if(!empty($user_name) && !empty($user_password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['user_password'] === $user_password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}

			echo "wrong username or password";
		}else
		{
			echo "wrong username or password";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>My Wishlist</title>
</head>
<body background="wonda1.jpg";>

	<style type="text/css">

	#wish{
		text-align: center;
		color: white;
		text-shadow: black;
		animation-name: mymove;
		animation-duration: 5s;
		background-size:contain;
		font-family: "Times New Roman", Times, serif;
	}
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: white;
		margin: auto;
		width: 300px;
		padding: 20px;
	}


	</style>


	</div>
<div id="wish"style="font-size: 50px;font-family: monospace; margin : 10px; color: coral">Wishlist</div>

</div>
	<div id="box">

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: lightblue">login</div>

			<input id="text" type="text" name="user_name">
			<label style= "color: black">username</label>
			<br><br>

			<input id="text" type="password" name="user_password">
			<label style= "color: black">password</label>
			<br><br>

			<input id="button" type="submit" value="login"><br><br>

			<a href="signup.php">click to signup</a><br><br>
		</form>
	</div>
</body>
</html>
