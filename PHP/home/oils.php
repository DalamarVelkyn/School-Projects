<?php
	require("storebase.php");	
	
	$servicespage = new ServicesPage();
	
	$servicespage->content = "<section>
	<p>What would you like to order today?</p>
	<form action='orderresults.php' method='post'>
	<table style='border: 0px;'>
	<tr style='background: #cccccc;'>
		<td style='width: 200px; text-align: center;'>Item</td>
		<td style='width: 100px; text-align: center;'>Quantity</td>
		<td style='width: 200px; text-align: center;'>Item</td>
		<td style='width: 100px; text-align: center;'>Quantity</td>
	</tr>
	<tr>
		<td>doTerra Breathe $25</td>
		<td><input type='text' name='breathe' value='0' size='3' maxlength='3' /></td>
		<td>Cedarwood $16</td>
		<td><input type='text' name='cedarwood' value='0' size='3' maxlength='3' /></td>
	<tr/>	
	<tr>
		<td>Citrus Bliss $19</td>
		<td><input type='text' name='citrus' value='0' size='3' maxlength='3' /></td>
		<td>Douglas Fir $25</td>
		<td><input type='text' name='douglas' value='0' size='3' maxlength='3' /></td>
	<tr/>
	<tr>
		<td>Fennel $19</td>
		<td><input type='text' name='fennel' value='0' size='3' maxlength='3' /></td>
		<td>Frankincense $92</td>
		<td><input type='text' name='frankincense' value='0' size='3' maxlength='3' /></td>
	<tr/>
	<tr>
		<td>Grapefruit $20</td>
		<td><input type='text' name='grapefruit' value='0' size='3' maxlength='3' /></td>
		<td>Lavender $27</td>
		<td><input type='text' name='lavender' value='0' size='3' maxlength='3' /></td>
	<tr/>
	<tr>
		<td>Lemon $12</td>
		<td><input type='text' name='lemon' value='0' size='3' maxlength='3' /></td>
		<td>Marjoram $24</td>
		<td><input type='text' name='marjoram' value='0' size='3' maxlength='3' /></td>
	<tr/>
	<tr>
		<td>doTerra On Guard $41</td>
		<td><input type='text' name='onguard' value='0' size='3' maxlength='3' /></td>
		<td>Oregano $31</td>
		<td><input type='text' name='oregano' value='0' size='3' maxlength='3' /></td>
	<tr/>
	<tr>
		<td>Peppermint $26</td>
		<td><input type='text' name='peppermint' value='0' size='3' maxlength='3' /></td>
		<td>Petitgrain $33</td>
		<td><input type='text' name='petitgrain' value='0' size='3' maxlength='3' /></td>
	<tr/>
	<tr>
		<td>Purify $23</td>
		<td><input type='text' name='purify' value='0' size='3' maxlength='3' /></td>
		<td>Slim & Sassy $31</td>
		<td><input type='text' name='slimnsassy' value='0' size='3' maxlength='3' /></td>
	<tr/>
	<tr>
		<td>Spikenard $65</td>
		<td><input type='text' name='spikenard' value='0' size='3' maxlength='3' /></td>
		<td>Vetiver $45</td>
		<td><input type='text' name='vetiver' value='0' size='3' maxlength='3' /></td>
	<tr/>
	<tr>
		<td>Whisper $31</td>
		<td><input type='text' name='whisper' value='0' size='3' maxlength='3' /></td>
		<td>Wild Orange $13</td>
		<td><input type='text' name='wildorange' value='0' size='3' maxlength='3' /></td>
	<tr/>
	<tr>
		<td>Ylang Ylang $46</td>
		<td><input type='text' name='ylangylang' value='0' size='3' maxlength='3' /></td>
	<tr/>
	</table>
	<br>
	<table>
	<tr>
		<td>Shipping Information:</td>
	</tr>
	</table>
	<table>
	<tr>
		<td>Name</td>
		<td><input type='text' name='name' size='30' maxlength='30' /></td>
	<tr/>
	<tr>
		<td>Street Address</td>
		<td><input type='text' name='street' size='50' maxlength='50' /></td>
	<tr/>
	<tr>
		<td>City</td>
		<td><input type='text' name='city' size='20' maxlength='20' /></td>
	<tr/>
	</table>
	<table>
	<tr>
		<td width='94'>State</td>
		<td><input type='text' name='state' size='3' maxlength='2' /></td>
		<td>ZIP</td>
		<td><input type='text' name='zip' size='6' maxlength='5' /></td>
	<tr/>
	</table>
	<table>
	<tr> 
		<td>How did you find the Witch?</td> 
		<td><select name='find'> 
		<option value = 'a'>I'm a regular customer</option> 
		<option value = 'b'>TV advertising</option> 
		<option value = 'c'>Phone directory</option> 
		<option value = 'd'>Word of mouth</option> 
		</select> 
		</td> 
	</tr>
	<tr>
		<td colspan='2' style='text-align: center;'>
		<input type='submit' value='Submit Order' /></td>
	</tr>
	</table>
</form>
	</section>";
	
	$servicespage->Display();
?>