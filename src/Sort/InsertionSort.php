<?php

namespace Sort;

/**
 * Class InsertionSort
 * @package Sort
 * @author Dmytro Nekrasov <dmytro.nekrasov@internetstores.com>
 */
class InsertionSort
{
    public function sort(array $collection): array
    {
        $count = \count($collection);

        for ($i = 1; $i < $count; $i++) {
            $x = $collection[$i];
            $j = $i;

            while ($j > 0 && $collection[$j - 1] > $x) {
                $collection[$j] = $collection[$j - 1];
                $j--;
            }

            $collection[$j] = $x;
        }

        return $collection;
    }
}