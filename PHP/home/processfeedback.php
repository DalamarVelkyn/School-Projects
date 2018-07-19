<?php
	require("page.php");
	
	$feedbackpage = new Page();
	
	$feedbackpage->content = "<section>
	<h2>Thank you!</h2>
	<p>This page is currently under construction</p>
	</section>";
	
	$feedbackpage->Display();
?>