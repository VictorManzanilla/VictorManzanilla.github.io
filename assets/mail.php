<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['massage'];


$mailheader = "From:".$name."<".$email.">\r\n";


$recipient = "vmanzanilla7@gmail.com";

mail($recipient, $message, $mailheader)
or die("Error!");

// echo"

// <!DOCTYPE HTML>

// <html>
// 	<head>
// 		<title>Victor Portfolio🚀</title>
// 		<meta charset="utf-8" />
// 		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
// 		<link rel="stylesheet" href="assets/css/main.css" />
// 		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
// 	</head>
// 	<body class="is-preload">
// 		<div class="container">
// 			<h1>
// 				Thank you for contacting me. I will get back to you as soon as possible!
// 			</h1>
// 			<p class="back">
// 				Go back <a href="index.html">Home</a>
// 			</p>


// 		</div>
		
		

// 		<!-- Scripts -->
// 			<script src="assets/js/jquery.min.js"></script>
// 			<script src="assets/js/jquery.scrolly.min.js"></script>
// 			<script src="assets/js/jquery.scrollex.min.js"></script>
// 			<script src="assets/js/browser.min.js"></script>
// 			<script src="assets/js/breakpoints.min.js"></script>
// 			<script src="assets/js/util.js"></script>
// 			<script src="assets/js/main.js"></script>

// 	</body>
// </html>
// ";






?>