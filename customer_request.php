<html>
	<body>
		<?php
			$to= "info@qualitysafefood.com";
			$subject ="Message";
			$email = $_REQUEST['email'];
			$message = $_REQUEST['message'];
			$headers ="Email:$email";
			$sent = mail($to,$subject,$message,$headers);
			if($sent)
			{
				print('<a href="index.html"> Thank you for your message </a>');
			}
			else
			{
				print "There was an error sending your message";
			}
			
			
		?>
	</body>
</html>