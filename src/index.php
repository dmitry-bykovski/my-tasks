<?php

namespace Dmitry\MyTasks;

require __DIR__ . '/../vendor/autoload.php';

use Dmitry\MyTasks\TestStroop;

$testData = new TestStroop();
echo json_encode($testData->outputWordsColors());
