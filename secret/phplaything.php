<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Kevin Granger: PHPlaything</title>
		<?php include '../lib/inc/fonts.html'; ?>
		<link rel="stylesheet/less" type="text/css" href="../css/main.less">
		<script src="/~kmg2728/webdev-309/final/lib/js/less.min.js" type="text/javascript"></script>
	</head>
	<body>
		<article>
			<?php include '../lib/inc/nav.html'; ?>

			<p>
			<?php include './count.txt'; ?>
			!
			</p>

			<form method="post" action="counter.php">

				<?php $referrer = getenv ("HTTP_REFERER"); ?>

				<input type="hidden" name="referrer" value="<?php echo $referrer ?>" />

				<input type='submit' value='counter++;' />
			</form>
			</article>
	</body>
</html>

<!-- vim: set ft=html:-->
