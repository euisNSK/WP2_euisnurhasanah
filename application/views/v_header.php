<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>web prog II merancang templat sederhana dengan codoigniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() 
	?>assets/css/stylebuku.css">
</head>
<body>
	<div id="wrapper">
		<header>
			<hgroup>
				<h1>rentalbuku.net</h1>
				<h3>membuat template sederhana dengan codeigniter</h3>
			</hgroup>
			<nav>
				<ul>
					<li><a href="<?php echo base_url().'index.php/web' ?>">home</a></li>
					<li><a href="<?php echo base_url().'index.php/web/about' ?>">about</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>
	</div>
</body>
</html>