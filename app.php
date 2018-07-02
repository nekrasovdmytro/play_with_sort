<?php

require_once 'vendor/autoload.php';

use Sort\SelectionSort;
use Sort\InsertionSort;

$a = [4,3,5,6,2,6,9,7,34234,54352,213123324,32452345];

//$inSort = new SelectionSort();

//print_r($inSort->sort($a, SelectionSort::DESC));

$sort = new InsertionSort();
$result = $sort->sort($a);

print_r($result);