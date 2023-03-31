<?php




function heapify(&$arr, $n, $i) {
    $smallest = $i;
    $l = 2 * $i + 1;
    $r = 2 * $i + 2;
    if ($l < $n && $arr[$l] < $arr[$smallest]) {
        $smallest = $l;
    }
    if ($r < $n && $arr[$r] < $arr[$smallest]) {
        $smallest = $r;
    }
    if ($smallest != $i) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$smallest];
        $arr[$smallest] = $temp;
        heapify($arr, $n, $smallest);
    }
}

function heapSort(&$arr) {
    $n = count($arr);
    for ($i = ($n / 2) - 1; $i >= 0; $i--) {
        heapify($arr, $n, $i);
    }
    for ($i = $n - 1; $i >= 0; $i--) {
        $temp = $arr[0];
        $arr[0] = $arr[$i];
        $arr[$i] = $temp;
        heapify($arr, $i, 0);
    }
}
echo 111;exit;
$arr = [1, 25, 3, 3];
heapSort($arr);
print_r($arr);
