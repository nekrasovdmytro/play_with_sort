<?php

require_once 'vendor/autoload.php';

use Sort\InsertionSort;

$a = [4,3,5,6,2,6,9,7,34234,54352,213123324,32452345];

$inSort = new InsertionSort();

print_r($inSort->sort($a, InsertionSort::DESC));