<?php
	require("page.php");
	
	$homepage = new Page();
	
	$homepage->content = "<section>
	<h2>Welcome to the Witch's Hut</h2>
	<p>Come in and make yourself at home.</p>
	<p>For all things witchcraft; incense, oils, charms, crystals, and spells you've come to the right place.</p>
	<p>If you see anything you like, let me know. I'm here to help.</p>
	</section>";
	
	$homepage->Display();
?>