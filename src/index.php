<?php

namespace Dmitry\MyTasks;

require __DIR__ . '/../vendor/autoload.php';

use Dmitry\MyTasks\King;
use Dmitry\MyTasks\Queen;

if ($_POST['king'])
{
    $kingCoordinates = $_POST['king'];
    $king = new King($kingCoordinates['x'], $kingCoordinates['y']);
    if ($king->move())
    {
        echo json_encode(['coordinates' => $kingCoordinates]);
    }
}

if ($_POST['queen'])
{
    $queenCoordinates = $_POST['queen'];
    $queen = new Queen($queenCoordinates['x'], $queenCoordinates['y']);
    if ($queen->move())
    {
        echo json_encode(['coordinates' => $queenCoordinates]);
    }
}