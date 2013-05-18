<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Kevin Granger: PHPlaything</title>
		<?php include '/webdev-309/final/lib/inc/fonts' ?>
		<link rel="stylesheet/less" type="text/css" href="/webdev-309/final/css/main.less">
		<script src="/webdev-309/final/lib/js/less.min.js" type="text/javascript"></script>
	</head>
	<body>
		<div class='container'>
			<?php include '/webdev-309/final/lib/inc/nav.html'; ?>

			<?php include '/webdev-309/final/secret/count.txt'; ?>

			<form method="post" action="counter.php">

				<?php $referrer = getenv ("HTTP_REFERER"); ?>

				<input type="hidden" name="referrer" value="<?php echo $referrer ?>" />

				<input type='submit' value='counter++;' />
			</form>
		</div>
	</body>
</html>

<!-- vim: set ft=html:-->
