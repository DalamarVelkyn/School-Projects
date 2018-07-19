<?php
	require("storebase.php");	
	
	$servicespage = new ServicesPage();
	
	$servicespage->content = "<section>
	<h2>Do not be afraid, the witch will not hurt you.</h2>
	<p>In these pages you will find the services that the witch can provide, at a price.</p>
	
	<ul>
		<li>Incense</li>
		<li>Essential Oils</li>
		<li>Crystals</li>
		<li>Charms</li>
		<li>Spells</li>
	</ul>
	
	</section>";
	
	$servicespage->Display();
?>