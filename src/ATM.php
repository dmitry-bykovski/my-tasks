<?php

namespace Dmitry\MyTasks;

require __DIR__ . '/../vendor/autoload.php';

class ATM
{
    public function getMoney($inStock, $sumInput)
    {
        $inStock = explode(', ', $inStock);
        $inStockCount = count($inStock);
        $residue = $sumInput;
        $outputMoney = [];

        for ($i = $inStockCount - 1; $i >= 0; $i--)
        {
            $number = $residue / $inStock[$i];
            if ((int)$number > 0){
                $outputMoney[$inStock[$i]] = (int)$number;
                $residue -= (int)$number * $inStock[$i];
            }
        }

        if ($residue){
            if ($sumInput - $residue > 0){
                $minNumber = $sumInput - $residue;
                $maxNumber = $sumInput - $residue + $inStock[0];

                $outputMoney = 'Неверная сумма. Выберите ' . $minNumber . ' или ' . $maxNumber . '.';
                return $outputMoney;
            }
            return $outputMoney = 'Невозможно выдать такую сумму.';
        }

        return $this->shuffleAssoc($outputMoney);
    }

    function shuffleAssoc($array) {
        $keys = array_keys($array);

        shuffle($keys);

        foreach($keys as $key) {
            $new[$key] = $array[$key];
        }

        $array = $new;

        return $array;
    }
}