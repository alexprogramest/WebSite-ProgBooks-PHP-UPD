<?php 
	session_start();

	$page = $_GET['page'];
		if ($page === null){
			$page = 'landing';
	}
	$page = trim($page, "\/' $%&#@!\"");

	$userName = $_POST['userName'];
	if ($userName !== null){
		$userPassword = $_POST['userPassword'];
		$userName = trim($userName, "\/' $%&#@!\"");
		$userPassword = trim($userPassword, "\/' $%&#@!\"");
		session_unset();
		if ($_POST['keep_user'] == "on"){
			$_SESSION['userName'] = $userName;
			$_SESSION['userPassword'] = $userPassword;
		}
		// if ($_POST['keep_user'] == "on" or $page = "sign_in_or_sign_up") {
		// 	setcookie('userName', $userName, time(), "/");
		// 	setcookie('userPassword', $userPassword, time(), "/");
		// }
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montaga&family=Montserrat:wght@400;500;600;700;800&family=Roboto&family=Spectral+SC&display=swap" rel="stylesheet">
		
	</head>
</html>
<?php 
	if ($page != 'landing') {
		require "header.php";
	}
	require 'pages/' . $page . '.php';
	require "footer.php";
?>
