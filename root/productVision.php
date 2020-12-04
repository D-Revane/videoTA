<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html>
  
<head>

  <title> videoTA App | App Planning and Mockup  </title>
  <link rel="stylesheet" href="styles.css">
	<script src="javaScript/firebase.js"></script>
</head>

<body>
<div id="wrapper">
	
	<header>
		<?php include "php-includes/header.php" ;?>
	</header>
	
	
  <h1>Application Overview/Vision</h1>

    <p>The <em>videoTA</em> video player app is designed to improve on the available delivery of learning material in a virtual setting.  The app allows users to upload video via a url input, to be viewed in our player.  The user is able to create messages and corrisponding timestamps where the video will automatically pause at the given timestamp, and display the desired message.  This can be a message to emphasize on an important topic, give a talking point for discussion, or to simply allow students time to catch up in their notes.  The video resumes when the message alert is confirmed by the viewer/student.</p>

    <p>Although designed with educational purposes in mind, the <em>videoTA</em> app's functionality is perfect for anyone looking to add 
    some interaction to their video content. 

  <h2>User Stories</h2>

    <h3>User Story 1</h3>

      <p>As an educator, I'd like a better way to deliver pr-recorded material to my students.</p>

    <h3>User Story 2</h3>

      <p>As an educator, I'd like to improve on the virtual learning experience that I am able to deliver to my students.</p>

    <h3>User Story 3</h3>

      <p>As an employer, I'd like a better way to deliver instructional videos to my employees.</p>

    <h3>User Story 4</h3>

      <p>As a student, I want a more interactive on-line learning experience</p>

    <h3>User Story 5</h3>

      <p>As a student, I want online learning to be as close to in-person classes as possible.</p>

    <h3>User Story 6</h3>

      <p>As a youtuber, I want to be able to easily add interactive text to my videos</p>

    <h3>User Story 7</h3>

      <p>As a videographer, I want to be able to add dramatic breakpoints to my peices, without altering the original content</p>

    <h3>User Story 8</h3>

      <p>As an extreme sport athelete, I'd like to add personal captions to recorded footage of me preforming my sport</p>

    <h3>User Story 9</h3>

      <p>As a hobbiest, I'd like to have fun playing with, and customizing online content</p>

    <h3>User Story 10</h3>

      <p>As a student, I'd like some way to pull my attention back to important concepts in long and boring pre-recorded lectures.</p>
    

  <h2>Firebase Usage</h2>

      <p>The videoTA app will use Google's Firebase storage network to store the admin users desired video url's, along with any of 
        the saved messages and timestamps.  This will allow for students/viewers to view the uploaded videos remotely.  With further testing and development of the app we hope to be able to offer online cloud storage allowing for libraries of video's and their assigned messages and timestamps.

				<footer>
	 <?php include "php-includes/footer.php" ;?>
	</footer>
 
</div>


</body>
</html>