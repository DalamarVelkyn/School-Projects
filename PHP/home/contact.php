<?php
	require("page.php");
	
	$contactpage = new Page();
	
	$contactpage->content = "<section>
	<h2>Contact us</h2>
	<form action='processfeedback.php' method='post'>
		<table style='border: 0px;'>
		<tr>
			<td><strong>Your name:</strong></td>
		</tr>
		<tr>
			<td><input type='text' name='name' size='30' maxlength='30' /></td>
		</tr>	
		<tr>
			<td><strong>Your email address:</strong></td>
		</tr>
		<tr>
			<td><input type='text' name='email' size='30' maxlength='30' /></td>
		</tr>
		<tr>
			<td><strong>Let us know how we can help you:</strong></td>
		</tr>
		<tr>
			<td><textarea name='feedback' rows='10' cols='50'></textarea></td>
		</tr>
		<tr>
			<td colspan='2' style='text-align: center;'>
			<input type='submit' value='Submit' /></td>
		</tr>

	</table>
	</form>
	</section>";
	
	$contactpage->Display();
?>