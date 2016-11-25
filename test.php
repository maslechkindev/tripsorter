<?php
require_once (__DIR__.'/TripSorter.php');

$tikets = [
    [
        'name'       => 'train',
        'transportNumber' => '78A',
        'seat'            => '45B',
        'gate'            => null,
        'baggage'         => null,
        'from'          => 'Madrid',
        'to'          => 'Barcelona',
        'description'     => 'all this text 1'
    ],
    [
        'name'       => 'bus',
        'transportNumber' => '78A',
        'seat'            => 'No seat assingment',
        'gate'            => null,
        'baggage'         => null,
        'from'          => 'Barcelona',
        'to'          => 'Gerona Airport',
        'description'     => 'all this text 2'
    ],
    [
        'name'       => 'airplain',
        'transportNumber' => 'SK455',
        'seat'            => '3A',
        'gate'            => '45B',
        'baggage'         => 'Baggage drop at ticket counter 455',
        'from'          => 'Gerona Airport',
        'to'          => 'Stockholm',
        'description'     => 'all this text 3'
    ],
    [
        'name'       => 'airplain',
        'transportNumber' => 'SK22',
        'seat'            => '7B',
        'gate'            => '22',
        'baggage'         => 'Baggage will we automatically transferred from your last leg',
        'from'          => 'Stockholm',
        'to'          => 'New York JFK',
        'description'     => 'all this text 4'
    ],
];

try{
    $sorter = new TripSorter();
    $sorter->setTickets($tikets);
} catch (Exception $e) {
    echo 'Transport is not found: ',  $e->getMessage(), "\n";
}
//$sorter->setTickets(json_encode($tikets));