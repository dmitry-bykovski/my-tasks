<?php

namespace Dmitry\MyTasks;

require __DIR__ . '/../vendor/autoload.php';

class TestStroop
{
    public $wordsColors =
        [
            'red' => '#ff0000',
            'blue' => '#0000ff',
            'green' => '#00ff00',
            'yellow' => '#ffff00',
            'lime' => '#ccff00',
            'magenta' => '#ff0090',
            'black' => '#000000',
            'gold' => '#ffd700',
            'gray' => '#808080',
            'tomato' => '#ff6347',
        ];

    public function outputWordsColors()
    {
        $outputWordsColors = [];

        foreach ($this->shuffle_assoc($this->wordsColors) as $color)
        {
            $word = array_search($color, $this->wordsColors);
            $randColorKey = array_rand($this->wordsColors);

            while ($this->wordsColors[$randColorKey] == $color || in_array($this->wordsColors[$randColorKey], $outputWordsColors))
            {
                $randColorKey = array_rand($this->wordsColors);
            }

            $outputWordsColors[$word] = $this->wordsColors[$randColorKey];
        }

        return $outputWordsColors;
    }

    function shuffle_assoc($array) {
        $keys = array_keys($array);

        shuffle($keys);

        foreach($keys as $key) {
            $new[$key] = $array[$key];
        }

        $array = $new;

        return $array;
    }
}