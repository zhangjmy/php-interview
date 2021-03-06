<?php

/**
 * 快速排序
 * 先从数列中取出一个数作为基准数。
 * 分区过程，将比这个数大的数全放到它的右边，小于或等于它的数全放到它的左边。
 * 再对左右区间重复第二步，直到各区间只有一个数。
 * @param array $list
 * @return array
 */
function quickSort(array $list) : array
{
    $count = count($list);
    if ($count <= 1) {
        return $list;
    }

    $pointValue = $list[0];
    $left = [];
    $right = [];
    for ($i = 1; $i < $count; $i++) {
        if ($list[$i] < $pointValue) {
            $left[] = $list[$i];
        }else{
            $right[] = $list[$i];
        }
    }
    $left = quickSort($left);
    $right = quickSort($right);
    return array_merge($left, [$pointValue], $right);
}

var_dump(quickSort([6, 3, 8, 2, 9, 1]));


function whileQuickSort(array $array) : array
{
    $count = count($array);
    if ($count <= 1) {
        return $array;
    }

    $pointValue = $array[0];
    $left = [];
    $right = [];
    $i = 1;
    while($i < $count) {
        if ($array[$i] < $pointValue) {
            $left[] = $array[$i];
        }else{
            $right[] = $array[$i];
        }
        $i++;
    }
    $left = whileQuickSort($left);
    $right = whileQuickSort($right);
    return array_merge($left, [$pointValue], $right);
}

var_dump(whileQuickSort([6, 3, 8, 2, 9, 1]));