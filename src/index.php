<?php

namespace Dmitry\MyTasks;

require __DIR__ . '/../vendor/autoload.php';

use Dmitry\MyTasks\King;
use Dmitry\MyTasks\Qeen;

if ($_POST['king'])
{
    $king = new King($_POST['king']['x'], $_POST['king']['y']);
    if ($king->move())
    {
        echo json_encode(['result' => 'success']);
    }
}

if ($_POST['qeen'])
{
    $qeen = new Qeen($_POST['qeen']['x'], $_POST['qeen']['y']);
    if ($qeen->move())
    {
        echo json_encode(['result' => 'success']);
    }
}