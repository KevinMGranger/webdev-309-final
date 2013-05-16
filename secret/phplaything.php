<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Kevin Granger</title>
		<?php include '/webdev-309/final/lib/inc/masterstyle.html'; ?>
	</head>
	<body>
		<div class='container'>
			<?php include '/webdev-309/final/lib/inc/nav.html'; ?>

			<form method="post" action="clickcounter.php">
				<input type='submit' name='click' value='counter++;' />
			</form>
		</div>
	</body>
</html>

<!-- vim: set ft=html:-->
