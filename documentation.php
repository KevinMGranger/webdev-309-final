<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Kevin Granger: Documentation</title>
		<?php include './lib/inc/fonts.html'; ?>
		<link rel="stylesheet/less" type="text/css" href="./css/main.less">
		<script src="/~kmg2728/webdev-309/final/lib/js/less.min.js" type="text/javascript"></script>
	</head>
	<body>
		<?php include './lib/inc/nav.html'; ?>

		<article>

		<section>
		        <h2>CSS</h2>
		        <p>To cut down on how often I would repeat myself in a CSS file, I opted to use Less, the dynamic stylesheet language.</p>
			<p>Almost every page inherits from the "main.less" file. This file takes care of the navigation, defines how hovered over links should look, the background, and how the main content should be styled.</p>
			<p>Pages can easily override the CSS, as seen on the main / home / index page.</p>
		</section>
		<section>
		        <h2>Javascript</h2>
		        <p>I used jQuery / javascript to:</p>
			<ul>
			        <li>Colorize hovered-over links</li>
			        <li>Highlight the link for the current page in the navigation</li>
				<li>Change the text of a hovered-over nav link</li>
			        <li>Populate the content of the contact page in an obfuscated manner</li>
			        <li>Remove the extraneous "home" link from the home / main / index page.</li>
			</ul>
		</section>
		<section>
		        <h2>PHP: Click counter</h2>
		        <p>The clicks are saved in a separate file. This file is read every time the page is opened. When the button is clicked, the server adds one to the count as long as the referring page is correct.</p>
			<p>The page referral is checked so that the count isn't artificially increased by visiting the results page.</p>
		</section>
		<section>
		        <h2>Secret Subdirectory</h2>
		        <p>To protect against abuse, the PHP counter is protected in the secret area of the site.</p>
			<p>This is done using .htaccess to only allow in those who are authenticated with RIT's LDAP system.</p>
		</section>
		
		</article>

		<?php include './lib/inc/navhandler.html' ?>
	</body>
</html>

<!-- vim: set ft=html:-->
