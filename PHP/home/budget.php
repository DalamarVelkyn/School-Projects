<?php
	require("servicesbase.php");
	
	$budgetpage = new ServicesPage();
	
	$budgetpage->content = "<section>
	<p>Never seem to have money left for what you truly want? Let us help you manage your bills so you can enjoy the fruits of your labor!</p>
	</section>";
	
	$budgetpage->Display();
?>