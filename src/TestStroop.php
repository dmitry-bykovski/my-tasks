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

    public function getWordsColors()
    {
        $outputWordsColors = [];
        $blockWordsColors = [];

        for ($i = 0; $i < 25; $i++)
        {
            $word = array_rand($this->wordsColors);
            $color = $this->wordsColors[$word];
            $randWord = array_rand($this->wordsColors);

            while ($this->wordsColors[$randWord] == $color || in_array($word, array_keys($blockWordsColors)))
            {
                if ($this->wordsColors[$randWord] == $color)
                {
                    $randWord = array_rand($this->wordsColors);
                }

                if (in_array($word, array_keys($blockWordsColors)))
                {
                    $word = array_rand($this->wordsColors);
                }
            }

            if (count($blockWordsColors) < 4)
            {
                $blockWordsColors[$word] = $this->wordsColors[$randWord];
            } else {
                $blockWordsColors[$word] = $this->wordsColors[$randWord];
                $outputWordsColors[] = $blockWordsColors;
                $blockWordsColors = [];
            }
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