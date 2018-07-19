<?php
	require("servicesbase.php");
	
	$debtpage = new ServicesPage();
	
	$debtpage->content = "<section>
	<p>Deep in debt and not sure how to get out of it? High interest rates putting you down? Leave it to us!</p>
	</section>";
	
	$debtpage->Display();
?>