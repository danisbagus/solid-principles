<?php 

require_once("./Shipment.php");

$shipment1 = new PastiAntar(100, 10, 8, 9, 80);

$shipment2 = new CepatKirim(100, 10, 8, 9, 0.8);

$shipment1Fee = $shipment1->calculateFee();

$shipment2Fee = $shipment2->calculateFee();

print_r("shipment 1 fee:" . $shipment1Fee);
print_r("\nshipment 2 fee:" . $shipment2Fee);