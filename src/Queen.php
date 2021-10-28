<?php

namespace Dmitry\MyTasks;

require __DIR__ . '/../vendor/autoload.php';

use Dmitry\MyTasks\AbstractChessMen;
use Exception;

class Queen extends AbstractChessMen
{

    /**
     * @throws Exception
     */
    public function move()
    {
        $position = $this->getPosition();

        if (
            ($position['x'] == 1  && in_array($position['y'], range(0, 8))) ||
            ($position['y'] == 1  && in_array($position['x'], range(0, 8))) ||
            $position['x'] == $position['y']
        ) {
            return true;
        } else {
            throw new Exception("Can't move Queen to coordinates x: " . $position['x'] . ";y: " . $position['y'] . '.');
        }
    }
}