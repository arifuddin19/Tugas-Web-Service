<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('id' => 'cus_Dqsq58SM7pCGD0', 'description' => 'tamu adalah raja dunia');
$result = $myStripe->editcustomer($data);
	echo "<pre>"; print_r($result);