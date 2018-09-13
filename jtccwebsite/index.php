<?php
$cookie_name = "visited";
$cookie_value = "true";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<head onload="requestHandler(req, res)">
	<meta charset="utf-8">
	<title>JTCCProgrammingClub Website</title>
	<link href="styles.css" media="all" rel="stylesheet" type="text/css">
</head>

<body>
	
	
	<div id="header">
	<?php
	if(!isset($_COOKIE["visited"])){
		
		echo '<div id="sp">
				<div id="sp-content">
   					<h2>Welcome !</h2>
    				<p>This is the John Tyler Programming Club website, made by the students of the club. This site is still under construction, so many of the functions and contents of the website will be unfinished and/or missing.</p>

    				<button class="button" onclick="off()">I Understand</button>
				</div></div>';
	} 
	else {

	}
		
	include_once 'header.html';	
	?>
	</div>
	<hr>
	<div class="container">
		
		<h2>About Us</h2>
		<p>&emsp;In the Programming Club, our goal is to have like-minded individuals working together in improving their skills and forge long-lasting connections. We will work in many programming languages on many projects. You’ll be able to collaborate with developers of similar interest and work on fun projects! If you are a newbie to programming, do not worry; you’ll have access to a room full of knowledge. 
		</p>
		<p>&emsp;We have physical meetings on-campus along with online meetings via Discord. So, if you can't make physical meetings, you can still collaborate through the power of the Internet!</p>
		<p>&emsp;If you're a JTCC student and want to particpate, <a href="contact.html" style="">Contact Us!</a></p>
		<p>&emsp;This website is an ongoing project for John Tyler Community College's Programming Club.</p>
		<h4>President</h4>
		<p>&emsp;Andrew HT</p>
		<h4>Vice President</h4>
		<p>&emsp;Jeremy T</p>
		<h4>Secretary</h4>
		<p>&emsp;Vacant</p>
		<h4>Treasurer</h4>
		<p>&emsp;Jacob H </p>

		<br />
		
		<h3>Alumni</h3>
		<p>Tristan F &emsp;Founder, President 2017-2018</p>
		<p></p>
		<p>Alexander S &emsp;Treasurer 2017-2018</p>
		<p></p>

		
<!--		<h6><a href="surprise.html">Click here for a surprise!</a></h6>-->
	</div>
	<script>
		function on() {
    		document.getElementById("sp").style.display = "block";
		}

		function off() {
    		document.getElementById("sp").style.display = "none";
		}
		function requestHandler(req, res) {
			res.setHeader('X-XSS-Protection','1;mode=block');
			res.setHeader('X-Frame-Options','SAMEORIGIN');
		}
	</script>
</body>
</html>
