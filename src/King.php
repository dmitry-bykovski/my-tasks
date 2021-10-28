<?php

namespace Dmitry\MyTasks;

require __DIR__ . '/../vendor/autoload.php';

use Dmitry\MyTasks\AbstractChessMen;
use Exception;

class King extends AbstractChessMen
{

    /**
     * @throws Exception
     */
    public function move()
    {
        $position = $this->getPosition();
        $validCoordinates = [
            'x' => [
                3,
                4,
                5,
            ],
            'y' => [
                2,
                3,
                4,
            ]
        ];

        if (
            in_array($position['x'], $validCoordinates['x']) &&
            in_array($position['y'], $validCoordinates['y']) &&
            $position['x'] != $position['y']
        ) {
            return true;
        } else {
            throw new Exception("Can't move King to coordinates x: " . $position['x'] . ";y: " . $position['y'] . '.');
        }
    }
}