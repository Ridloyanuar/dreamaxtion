<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneController extends Controller
{
    public function one()
    {
        $str = 'aaabbcccddeddbzaa';
        $a = [];
        $b = [];
        $c = [];
        $d = [];
        $z = [];

        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == 'a') {
                $a[] = 'a';
            }

            if ($str[$i] == 'b') {
                $b[] = 'b';
            }

            if ($str[$i] == 'c') {
                $c[] = 'c';
            }

            if ($str[$i] == 'd') {
                $d[] = 'd';
            }

            if ($str[$i] == 'e') {
                $e[] = 'e';
            }

            if ($str[$i] == 'z') {
                $z[] = 'z';
            }
        }

        $arr = [$a, $b, $c, $d, $e, $z];

        return 'a' . count($a) . 'b' . count($b) . 'c' . count($c) . 'd' . count($d) . 'ez';
    }
}
