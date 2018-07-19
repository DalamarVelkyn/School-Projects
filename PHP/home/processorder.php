<!DOCTYPE html>
<html>
<head>The Witch's Hut - Order Results</head>
<body>

<?php	
	require('randomcust.php');
	
	require_once('file_exceptions.php');
	
	rand_cust(100, 500, 1, 5);
?>
<h2>Order Results</h2>
<?php
	$breathe = $_POST['breathe']; //assign value from form to parameter lavoil
	$cedarwood = $_POST['cedarwood']; //assign value from form to parameter ttooil
	$citrus = $_POST['citrus']; //assign value from form to parameter ornoil
	$douglas = $_POST['douglas'];
	$fennel = $_POST['fennel'];
	$frankincense = $_POST['frankincense'];
	$grapefruit = $_POST['grapefruit'];
	$lavender = $_POST['lavender'];
	$lemon = $_POST['lemon'];
	$marjoram = $_POST['marjoram'];
	$onguard = $_POST['onguard'];
	$oregano = $_POST['oregano'];
	$peppermint = $_POST['peppermint'];
	$petitgrain = $_POST['petitgrain'];
	$purify = $_POST['purify'];
	$slimnsassy = $_POST['slimnsassy'];
	$spikenard = $_POST['spikenard'];
	$vetiver = $_POST['vetiver'];
	$whisper = $_POST['whisper'];
	$wildorange = $_POST['wildorange'];
	$ylangylang = $_POST['ylangylang'];
	$find = $_POST['find']; //assign value from form to parameter find
	$name = $_POST['name']; //assign value from form to parameter shipadr
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$date = date('H:i, jS F Y'); //assign date value to parameter date
	$totalqty = 0; //assign initial value (0) to parameter totalqty
	$totalqty = $breathe + $cedarwood +	$citrus + $douglas + $fennel + $frankincense + $grapefruit + $lavender + $lemon + $marjoram + $onguard + $oregano + 
	$peppermint + $petitgrain + $purify + $slimnsassy +	$spikenard + $vetiver +	$whisper + $wildorange + $ylangylang;
	$totalamount = 0.00; //assign initial value (0.00) to parameter totalqty 
		
	if($totalqty == 0) //if there are no values enter in item fields, display this message
	{echo "You did not order anything on the previous page!<br />";
	exit;
	}
	
	echo "<p>Items ordered: ".$totalqty."<br />"; //display total amount of ordered items
	
	
	define('BREATHEPRICE', 25); 
	define('CEDARWOODPRICE', 16);
	define('CITRUSPRICE', 19);
	define('DOUGLASPRICE', 25);
	define('FENNELPRICE', 19);
	define('FRANKINCENSEPRICE', 92);
	define('GRAPEFRUITPRICE', 20);
	define('LAVENDERPRICE', 27);
	define('LEMONPRICE', 12);
	define('MARJORAMPRICE', 24);
	define('ONGUARDPRICE', 41);
	define('OREGANOPRICE', 31);
	define('PEPPERMINTPRICE', 26);
	define('PETITGRAINPRICE', 33);
	define('PURIFYPRICE', 23);
	define('SLIMNSASSYPRICE', 31);
	define('SPIKENARDPRICE', 65);
	define('VETIVERPRICE', 45);
	define('WHISPERPRICE', 31);
	define('WILDORANGEPRICE', 13);
	define('YLANGYLANGPRICE', 46);
	
	$totalamount = $breathe * BREATHEPRICE + $cedarwood * CEDARWOODPRICE + $citrus * CITRUSPRICE + $douglas * DOUGLASPRICE + 
	$fennel * FENNELPRICE + $frankincense + FRANKINCENSEPRICE + $grapefruit * GRAPEFRUITPRICE + $lavender * LAVENDERPRICE + $lemon * LEMONPRICE + 
	$marjoram * MARJORAMPRICE + $onguard * ONGUARDPRICE + $oregano * OREGANOPRICE + $peppermint * PEPPERMINTPRICE + $petitgrain * PETITGRAINPRICE + 
	$purify + PURIFYPRICE + $slimnsassy * SLIMNSASSYPRICE + $spikenard * SPIKENARDPRICE + $vetiver + VETIVERPRICE + $whisper * WHISPERPRICE + 
	$wildorange * WILDORANGEPRICE + $ylangylang + YLANGYLANGPRICE; 
	//assign value to total amount parameter by multiplying amount ordered by price constant and summing up all items ordered
	
	echo "Subtotal: $".number_format($totalamount,2)." <br />"; //print pre-tax price

	$taxrate = 0.08; // local sales tax is 8%
	$totalamount = $totalamount * (1 + $taxrate); //update the totalvalue parameter by the actual items price and tax
	echo "Total including tax: $".number_format($totalamount,2)."</p>"; //print final price (including tax)
	
	echo '<p>Order #'.date('YmdHis').'</p>'; 
	//display the time and date the order was processed and list items processed. 
	//Some identifying mark could be added (order number?) so the customer can use this display to keep record of the order
	echo '<p>Your order is complete: </p>';
	if ($breathe > 0)
		echo htmlspecialchars($breathe).'x doTerra Breathe<br />';
		
	if ($cedarwood > 0)
		echo htmlspecialchars($cedarwood).'x Cedarwood<br />';
	
	if ($citrus > 0)
		echo htmlspecialchars($citrus).'x Citrus<br />';
	
	if ($douglas > 0)
		echo htmlspecialchars($douglas).'x Douglas Fir<br />';
	
	if ($fennel > 0)
		echo htmlspecialchars($fennel).'x Fennel<br />';
	
	if ($frankincense > 0)
		echo htmlspecialchars($frankincense).'x Frankincense<br />';
	
	if ($grapefruit > 0)
		echo htmlspecialchars($grapefruit).'x Grapefruit<br />';
	
	if ($lavender > 0)
		echo htmlspecialchars($lavender).'x Lavender<br />';
	
	if ($lemon > 0)
		echo htmlspecialchars($lemon).'x Lemon<br />';
	
	if ($marjoram > 0)
		echo htmlspecialchars($marjoram).'x Marjoram<br />';
	
	if ($onguard > 0)
		echo htmlspecialchars($onguard).'x doTerra On Guard<br />';
	
	if ($oregano > 0)
		echo htmlspecialchars($oregano).'x Oregano<br />';
	
	if ($peppermint > 0)
		echo htmlspecialchars($peppermint).'x Peppermint<br />';
	
	if ($petitgrain > 0)
		echo htmlspecialchars($petitgrain).'x Petitgrain<br />';
	
	if ($purify > 0)
		echo htmlspecialchars($purify).'x Purify<br />';
	
	if ($slimnsassy > 0)
		echo htmlspecialchars($slimnsassy).'x Slim & Sassy<br />';
	
	if ($spikenard > 0)
		echo htmlspecialchars($spikenard).'x Spikenard<br />';
	
	if ($vetiver > 0)
		echo htmlspecialchars($vetiver).'x Vetiver<br />';
	
	if ($whisper > 0)
		echo htmlspecialchars($whisper).'x Whisper<br />';
	
	if ($wildorange > 0)
		echo htmlspecialchars($wildorange).'x Wild Orange<br />';
	
	if ($ylangylang > 0)
		echo htmlspecialchars($ylangylang).'x Ylang Ylang<br />';
		
	echo "<p>Shipping Address:<br>"
	.htmlspecialchars($name)."<br>"
	.htmlspecialchars($street)."<br>"
	.htmlspecialchars($city)."<br>"
	.htmlspecialchars($state)." "
	.htmlspecialchars($zip)."</p>";
	
	
	$file = fopen("source.txt","a"); //open the source.txt file (create if it doesn't exist)
	
	if ($find == "a") 
	//loop through options until entered one is found and print in an individual line the source of customer's referal 
	//and create a value for parameter ref. 
		{ $ref = "Regular customer.\r\n"; } 
			elseif ($find == "b") 
			{ $ref = "Customer referred by TV advert.\r\n"; } 
			
			elseif ($find == "c") 
			{ $ref = "Customer referred by phone directory.\r\n"; } 
			
			elseif ($find == "d") 
			{ $ref = "Customer referred by word of mouth.\r\n"; } 
			
			else
			{ $ref = "We do not know how this customer found us.\r\n"; }
		
	fwrite($file,$ref);
	fclose($file);  //close the file
	
	@$fp = fopen("orders/orders.txt", "a"); //open the orders.txt file (create if it doesn't exist)
	
	$outputstring = $date."\t".$breathe." Breathe\t".$cedarwood." Cedarwood\t".$douglas." Douglas Fir\t".$fennel." Fennel\t".$frankincense.
	" Frankincense\t".$grapefruit." Grapefruit\t".$lavender." Lavender\t".$lemon." Lemon\t".$marjoram." Marjoram\t".$onguard.
	" On Guard\t".$oregano." Oregano\t".$peppermint." Peppermint\t".$petitgrain." Petitgrain\t".$purify." Purify\t".$slimnsassy.
	" Slim & Sassy\t".$spikenard." Spikenard\t".$vetiver." Vetiver\t".$whisper." Whisper\t".$wildorange." Wild Orange\t".$ylangylang.
	" Ylang Ylang\t\$".$totalamount."\t".$name."\t".$street."\t".$city."\t".$state."\t".$zip."\r\n"; 
	
	try
	{
		if(!($fp = @fopen("orders/orders.txt", "ab")))
		{
			throw new fileOpenException();
		}
		
		if (!flock($fp, LOCK_EX))
		{
			throw new fileLockException();
		}
		
		if(!fwrite($fp, $outputstring, strlen($outputstring)))
		{
			throw new fileWriteException();
		}
		
		flock($fp, LOCK_UN);
		fclose($fp);
		echo "<p>Order written.</p>";
	}
	
	catch (fileOpenException $foe)
	{
		echo "<p><strong>Orders file could not be opened.<br/>Please contact our webmaster for help.</strong></p>";
	}
	
	catch (Exception $e)
	{
		echo "<p><strong>Your order could not be processed at this time.<br/>Please try again later.</strong></p>";
	}

	$name=$_POST['name'];
	$street=$_POST['street'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$null='NULL';
	
	$db = new mysqli('localhost', 'id5267116_admin', 'password', 'id5267116_kelsoils');
		if (mysqli_connect_errno())
		{
			echo '<p>Error: Could not connect to database.<br/>
			Please try again.</p>';
			exit;
		}
		
		$query = "INSERT INTO Customers VALUES (?, ?, ?, ?, ?, ?)";
		$stmt = $db->prepare($query);
		$stmt->bind_param('isssss', $null, $name, $street, $city, $state, $zip);
		$stmt->execute();
		if ($stmt->affected_rows > 0)
		{
			echo "Success!";
		}
		else
		{
			echo "Failure!";
		}
		
		$db->close();
		
		
?>


</body>
</html>