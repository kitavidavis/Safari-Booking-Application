<?php

$itemNo            = $_REQUEST['item_number'];

$itemTransaction   = $_REQUEST['tx']; // Paypal transaction ID

$itemPrice         = $_REQUEST['amt']; // Paypal received amount

$itemCurrency      = $_REQUEST['cc']; // Paypal received currency type

 

$price = '19.99';

$currency='USD';

 

if($itemPrice==$price && $itemCurrency==$currency)

{

    echo "Payment Successful";

}

else

{

    echo "Payment Failed";

}
?>