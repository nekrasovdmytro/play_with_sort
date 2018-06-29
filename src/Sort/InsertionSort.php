<?php

namespace Sort;

/**
 * Class InsertionSort
 * @package Sort
 * @author Dmytro Nekrasov <dmytro.nekrasov@internetstores.com>
 */
class InsertionSort
{
    public const ASC = 1;
    public const DESC = -1;


    public function sort(array $collection, $direction = self::ASC): array
    {
        return $this->inSort($collection, $direction);
    }

    protected function inSort(array $collection, $direction): array
    {
        $sortFunc = $direction === self::ASC ? 'min' : 'max';

        $sorted = [];
        $tmpCollection = $collection;

        while (current($collection)) {
            $minOrMaxValue = $sortFunc($tmpCollection);
            $minOrMaxKey = array_search($minOrMaxValue, $tmpCollection, true);

            unset($tmpCollection[$minOrMaxKey]);

            $sorted[] = $minOrMaxValue;

            next($collection);
        }

        return $sorted;
    }
}