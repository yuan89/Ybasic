<?php
namespace app\tools;

//实现一个快速排序类
class QuickSort {
    public static function sort(&$arr) {
        $len = count($arr);
        if ($len <= 1) {
            return;
        }
        self::quickSort($arr, 0, $len - 1);
    }

    private static function quickSort(&$arr, $left, $right) {
        if ($left >= $right) {
            return;
        }
        $pivot = self::partition($arr, $left, $right);
        self::quickSort($arr, $left, $pivot - 1);
        self::quickSort($arr, $pivot + 1, $right);
    }

    private static function partition(&$arr, $left, $right) {
        $pivot = $arr[$right];
        $i = $left;
        for ($j = $left; $j < $right; $j++) {
            if ($arr[$j] < $pivot) {
                self::swap($arr, $i, $j);
                $i++;
            }
        }
        self::swap($arr, $i, $right);
        return $i;
    }

    private static function swap(&$arr, $i, $j) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
    }
}



?>