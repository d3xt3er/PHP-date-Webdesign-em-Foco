<?php
include ("../classes/ClassDate.php");

$entryDate=filter_input(INPUT_POST,'entryDate',FILTER_SANITIZE_STRING);
$entryTime=filter_input(INPUT_POST,'entryTime',FILTER_SANITIZE_STRING);
$entryFinal=$entryDate.' '.$entryTime;

$departureDate=filter_input(INPUT_POST,'departureDate',FILTER_SANITIZE_STRING);
$departureTime=filter_input(INPUT_POST,'departureTime',FILTER_SANITIZE_STRING);
$departureFinal=$departureDate.' '.$departureTime;

$objDate=new ClassDate($entryFinal,$departureFinal);
echo $objDate->getLocation();