<?php
require "./src/Controller.php";
require "./src/InterfacePriceCalculation.php";
require "./src/AbstractTariff.php";
require "./src/ServiceDriver.php";
require "./src/ServiceGps.php";
require "./src/BaseTariff.php";
require "./src/HourTariff.php";
require "./src/DayTariff.php";
require "./src/StudentTariff.php";

$controller = new Controller();
$controller->handle();
