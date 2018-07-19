<?php
	//Array of pictures to use for the shuffle
	$pictures = array('media/images/Breath-desc.jpg', 'media/images/Cedarwood-desc.jpg', 'media/images/Citrusbliss-desc.jpg', 'media/images/Douglasfir-desc.jpg', 'media/images/Fennel-desc.jpg', 'media/images/Frankincense-desc.jpg', 'media/images/Grapefruit-desc.jpg', 'media/images/Lavender-desc.jpg', 'media/images/Lemon-desc.jpg', 'media/images/Marjoram-desc.jpg', 'media/images/Onguard-desc.jpg', 'media/images/Oregano-desc.jpg', 'media/images/Peppermint-desc.jpg', 'media/images/Petitgrain-desc.jpg', 'media/images/Purify-desc.jpg', 'media/images/Slimnsassy-desc.jpg', 'media/images/Spikenard-desc.jpg', 'media/images/Vetiver-desc.jpg', 'media/images/Whisper-desc.jpg', 'media/images/Wildorange-desc.jpg', 'media/images/Ylangylang-desc.jpg');
	//shuffle to ensure pictures change on reload
	shuffle($pictures);
?>

<!DOCTYPE html>
<html>
	<head>
		<link href="styles/stylesindex.css" type="text/css" rel="stylesheet">
		<title>The Witch's Hut</title>
	</head>
	
	</body>
		<div class="title">
		<h1>The Witch's Hut</h1>
		</div>	
			<div align="center">
			<table style="width: 100%; border: 0">
				<tr>
				<!-- built in script to display 3 pictures from the randomized array -->
				<?php
					for ($i = 0; $i < 3; $i++)
					{
						echo "<td style=\"width:33%; text-align:center\"><img src=\"";
						echo $pictures[$i];
						echo "\"/></td>";
					}
				?>
				</tr>
			</table>
			</div>
		<div class="button">	
		<h2><a href="home/home.php">Enter the Hut</a></h2>
		</div>
	</body>
</html>

