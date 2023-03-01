<?php 
require_once('./Classes/order.php');
require_once('./Classes/row.php');
require_once('./config.php');
$row1 = new Row(9,3,123);
$row2 = new Row(11,1,12);


$rows = array($row1,$row2);
var_dump($rows);

 $action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);
?>
<form method="post">
<input type="submit" name="action" value="Place Order">
</form>


<?php
if($action == "Place Order"){
    $order = new Order($rows);
    $order->CreateOrder();
}
 
 ?>

 