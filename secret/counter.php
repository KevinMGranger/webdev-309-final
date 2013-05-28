<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Kevin Granger: Counter</title>
		<?php include '../lib/inc/fonts.html'; ?>
		<link rel="stylesheet/less" type="text/css" href="../css/main.less">
		<script src="/~kmg2728/webdev-309/final/lib/js/less.min.js" type="text/javascript"></script>
	</head>
	<body>
		<article>
			<?php include '../lib/inc/nav.html'; ?>

			<p>
				<?php 
				// code inspired by http://php.net/manual/en/function.fputs.php
				// and http://stackoverflow.com/questions/13405636/how-can-i-run-a-php-counter-script-when-clicking-a-link

				$referrer = $_POST["referrer"];

				$file = fopen("count.txt","r+");

				if ($file == false)
				{
					echo "Sorry, something went wrong. Please bug Kevin about it.";
					exit();
				}

				$count = fread($file);

				if (strcasecomp($referrer,"https://people.rit.edu/~kmg2728/webdev-309/final/secret/phplaything.php"))
				{
					$count[0] ++;
					fputs($file, "$count[0]");
					echo $count[0] . "!";
				}
				else
				{
					echo "Either something went wrong with the referring page, or you're trying to game the sytem. Please <a href='https://people.rit.edu/~kmg2728/webdev-309/final/secret/phpplaything.php'>go back to the PHPlaything page and try it again.</a>";
				}

				fclose($file);

					echo "For reference, this is your referrer: " . $referrer;

				?>
			</p>
			</article>
	</body>
</html>

<!-- vim: set ft=html:-->
