<?php

session_start();



$_SESSION['user'] = (isset($_GET['user'])===true) ? (int)$_GET['user'] : 0;


#require 'core/init.php';
require 'core/classes/Core.php';
require 'core/classes/Chat.php';

$chat = new Chat();

#echo '<pre>', print_r($chat->fetchMessages(), true), '</pre>';
#$chat->throwMessage(1, 'This is a test message');
?>

<!DOCTYPE html>
<html >
	<head> 
	  <title>chatapp</title>
	  <link rel="stylesheet" href="css/styles.css">
	</head>
	<body>


		<div class="chat">
			<div class="messages">
				<!--<div class="message">
					<a href="#">user</a> says:
					<p>The message will be displayed here</p>
				</div>-->
			</div>
			<textarea class="entry" placeholder="Type and hit enter. Shift + Enter for new line..."></textarea>
		</div>

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/chat.js"></script>
	</body>
</html>