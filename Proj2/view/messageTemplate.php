<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="../view/style/style.css">
	<meta charset="utf-8">
</head>
<body>
	<div id="main">
		<div id="top">
			<div id="logo"><img src="images/logo.png"></div>
		
			<ul id="smallMenu">
				<li><a href="../view/main.php">Strona glowna</a></li>
				<li><a href="../view/viewLoginUser.php">Login</a></li>
				<li><a href="../view/viewAddUser.php">Rejestracja</a></li>
				<li><a href="../contorler/logout.php">Logout</a></li>
			</ul>
		
		</div>
		<div id="banner"><img src="../view/images/banner.png"/></div>
		<div id="content">
			<div id="leftContent"> <?php echo $leftContent ?> </div>
			<div id="rightContent"> <?php echo $rightContent ?> </div>
		</div>
		<footer>Strona &copy Sylwester Macura 2013</footer>
	</div>
</body>
</html>