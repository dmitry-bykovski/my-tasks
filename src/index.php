<?php

namespace Dmitry\MyTasks;

require __DIR__ . '/../vendor/autoload.php';

use Dmitry\MyTasks\ATM;

$data = $_POST;

$atm = new ATM();
echo json_encode($atm->getMoney($data['inStockData'], $data['inputData']));