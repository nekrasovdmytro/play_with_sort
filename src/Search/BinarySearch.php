<?php

namespace Search;

/**
 * Class BinarySearch
 * @package Search
 * @author Dmytro Nekrasov <dmytro.nekrasov@internetstores.com>
 */
class BinarySearch
{
    public function search($search, $collection)
    {
        $middle = round(\count($collection) / 2);

        if ($collection[$middle] > $search) {
            $collection = \array_slice($collection, 0, $middle);
        } else {
            $collection = \array_slice($collection, $middle, \count($collection) - 1);
        }

        if (\count($collection) === 1) {
            $value = $collection[0];

            if ($value === $search) {
                return $value;
            }

            return null;
        }

        return $this->search($search, $collection);
    }
}