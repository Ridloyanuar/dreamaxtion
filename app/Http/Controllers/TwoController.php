<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoController extends Controller
{
    public function sortArr()
    {
        $arr = [9, 3, 7, 8, 2, 6, 1, 4, 10, 2, 2, 3];

        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }

        return response()->json([
            'status' => true,
            'message' => "sort result",
            'data' => $arr
        ], 200);
    }
}
