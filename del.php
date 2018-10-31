<?php
include('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('ID' => 'cus_Dqsq58SM7pCGD0');
$result = $myStripe->delcustomer($data);
echo "<pre>"; print_r($result);
?>