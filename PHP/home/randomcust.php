<?php
function rand_cust($mina, $maxa, $minb, $maxb)
	{
	echo '<p>You are '.rand($mina, $maxa).'th customer! Congratulations!</br>
	Please contact our support team with your order details to receive 
	your personalized discount of '.rand($minb, $maxb).'%</p>';
	}
?>
