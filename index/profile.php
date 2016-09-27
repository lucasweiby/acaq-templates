<!DOCTYPE html>
<html>
<head>
	<title>ACAQ • Perfil (Usuário)</title>
	<?php include("views/head.php") ?>
	<link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>
	<?php include("views/navbar.php") ?>
	<?php include("views/vertical-nav.php") ?>

	<!--Profile-->
	<div class="profile-box">
		<div class="cover-pic">
			<img class="cover" src="img/cover.png">
			<img class="profile-pic" src="img/Profile.png">
			<a href="profile.php"><h1 class="name">Mary Janne</h1></a>
			<a href="profile.php"><h1 class="user">@mary_janne2016</h1></a>
		</div>
		<div class="publication-box">
			<img class="profile-post-pic" src="img/Profile.png">
			<div class="post">
				<p class="title">O que quer saber?</p>
				<p class="desc">Coisas...</p>
				<div class="dropdown dropdown-post pull-right">
					<button class="btn-trans dropdown-toggle" type="button" data-toggle="dropdown">
						<!-- http://loremflickr.com/200/200/woman,profile -->
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu post-drop">
						<li class="set-prof"><a class="set" href="#">Editar</a></li>
						<li class="set-prof"><a class="set" href="#">Excluir</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="friends-box">
		<div class="friends">
			<img class="profile-friend-pic" src="img/Profile2.jpg">
			<h5>Noah</h5>
			<h6>@noah_es</h6>
		</div>
	</div>

</body>
</html>