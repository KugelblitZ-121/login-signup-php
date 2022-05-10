<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
// I added the prot number manually because it will be on 3306 as default, but mine is 3307

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, 3307);

if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// We create a function to fetch all the data in accounts and userdata tables so we can display them in the home page.
$fetchInfo = fetch_info($con);
function fetch_info($db){
	$query = "SELECT id, username, email, phone 
	FROM accounts" ;
	$result = $db->query($query);
	if($result== true){ 
		if ($result->num_rows > 0) {
			$row= mysqli_fetch_all($result, MYSQLI_ASSOC);
			$msg= $row;
		} else {
			$msg= "No Data Found"; 
		}
	}else{
		$msg= mysqli_error($db);
	}
	
	return $msg;
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home page
		</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="styles2.css" rel="stylesheet" type="text/css">

	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Assignment 3</h1>
				
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
            <?php
					if(is_array($fetchInfo)){
					foreach($fetchInfo as $info){
						?>

						<div style="border-radius: 10px; border: black 2px solid; color: #eaebed; background-color: #435165">
							<div>ID: <?php echo $info['id']??''; ?></div>
							<div>Name: <?php echo $info['username']??''; ?></div>
							<div>Email: <?php echo $info['email']??''; ?></div>
							<div>Phone: <?php echo $info['phone']??''; ?></div>
						</div>
					<?php
						}
					}?>
            
		</div>
	</body>
</html>