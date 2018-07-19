<!DOCTYPE html>
<html>
<head>
	<title>Kel's Oils Customer Search - Results</title>
</head>
<body>
	<h1>Customer Search Results</h1>
	<?php
		$searchtype=$_POST['searchtype'];
		$searchterm=trim($_POST['searchterm']); 
		//remove whitespace from beginning and end of search term
		
		if(!$searchtype || !$searchterm)
		{
			echo '<p>You have not entered search details.<br/>
			Please go back and try again.</p>';
			exit;
		}
		//display error if search term (or search type) is missing
		
		switch ($searchtype)
		{
			case 'Name':
			case 'City':
			case 'ZIP':
				break;
				
			default:
				echo '<p>That is not a valid search type. <br/>
				Please go back and try again.</p>';
				exit;
		}
		//searchtype being in a dropdown select menu, this portion is not required
		
		//connect to the database, important to remember order - host/login/pass/dbname
		$db = new mysqli('localhost', 'id5267116_admin', 'password', 'id5267116_kelsoils');
		if (mysqli_connect_errno())
		{
			echo '<p>Error: Could not connect to database.<br/>
			Please try again.</p>';
		}
		//error in case connection failed
		$query = "SELECT Name, StreetAddress, City, State, ZipCode 
				FROM Customers WHERE $searchtype = ?";
		$stmt = $db->prepare($query);
		$stmt->bind_param('s', $searchterm);
		$stmt->execute();
		$stmt->store_result();
		//return all selected fields, based on input searchtype. I opted to return the 
		//entire customer entry for a database search looking for customer info 
		//(order fulfillment perhaps?)
		$stmt->bind_result($name, $streetaddress, $city, $state, $zip);
		//save results for printing
		echo "<p>Number of Customers found: ".$stmt->num_rows."</p>";
		
		while($stmt->fetch())
		{
			echo "<p><strong>Name: ".$name."</strong>";
			echo "<br />Street: ".$streetaddress;
			echo "<br />City: ".$city;
			echo "<br />State: ".$state;
			echo "<br />ZIP: ".$zip;
		}
		//print results and run a loop for each valid return
		$stmt->free_result();
		//clear results from memory
		$db->close();
		//disconnect from database
	?>
</body>
</html>