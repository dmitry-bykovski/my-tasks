<?php

namespace Dmitry\MyTasks;

require __DIR__ . '/../vendor/autoload.php';

use Dmitry\MyTasks\AbstractChessMen;
use Exception;

class Qeen extends AbstractChessMen
{

    /**
     * @throws Exception
     */
    public function move()
    {
        $position = $this->getPosition();
        $validCoordinates = [
            'x' => [
                1,
                2,
                3,
                4,
                5,
                6,
                7,
                8],
            'y' => [
                1,
                2,
                3,
                4,
                5,
                6,
                7,
                8],
        ];

        if (
            ($position['x'] == 1  && in_array($position['y'], $validCoordinates['y'])) ||
            ($position['y'] == 1  && in_array($position['x'], $validCoordinates['x'])) ||
            $position['x'] == $position['y']
        ) {
            return true;
        } else {
            throw new Exception("Can't move Qeen to coordinates x: " . $position['x'] . ";y: " . $position['y'] . '.');
        }
    }
}