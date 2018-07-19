<section>
	<?php
		require('processorder.php');
	?>
</section>
<?php
	require("storebase.php");
	
	$servicespage = new ServicesPage();
	
	$servicespage->content = "<section>
	
	</section>";
	
	$servicespage->Display();
?>
	