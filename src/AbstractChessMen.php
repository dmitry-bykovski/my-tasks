<?php

namespace Dmitry\MyTasks;

require __DIR__ . '/../vendor/autoload.php';

use Dmitry\MyTasks\IChessMen;

abstract class AbstractChessMen implements IChessMen
{
    protected $x;

    protected $y;

    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function getPosition()
    {
        return ['x' => $this->x, 'y' => $this->y];
    }
}