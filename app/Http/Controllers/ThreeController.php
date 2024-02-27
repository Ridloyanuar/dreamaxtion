<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ThreeController extends Controller
{
    public function price(Request $request)
    {
        $rules = [
            'product_type' => 'required|string',
            'total_buy' => 'required|integer'
        ];

        $validation = Validator::make($request->all(), $rules);
        if (count($validation->errors()) != 0) {
            return response()->json([
                'status' => false,
                'message' => $validation->errors()
            ], 500);
        }

        $productType = $request->product_type;
        $totalProduct = $request->total_buy;

        $productA = 99900;
        $productB = 49900;

        $priceResult = 0;
        $date = strtoupper(now()->format("D"));
        if ($productType == 'A') {
            $priceResult = $productA;

            if ($totalProduct > 50) {
                $priceResult = $productA * 0.5;
            }

            if ($date == "MON" || $date == "THU") {
                $priceResult = $productA * 0.10;
            }

            if (($date == "MON" || $date == "THU") && $totalProduct > 50) {
                $priceResult = $productA * 0.10 * 0.5;
            }
        }

        if ($productType == 'B') {
            $priceResult = $productB;

            if ($totalProduct > 100) {
                $priceResult = $productB * 0.1;
            }

            if ($date == "FRI") {
                $priceResult = $productB * 0.5;
            }

            if (($date == "FRI") && $totalProduct > 100) {
                $priceResult = $productB * 0.10 * 0.5;
            }
        }

        if ($priceResult == 0) {
            return response()->json([
                'status' => false,
                'message' => "price result",
                'data' => "produk tidak ditemukan"
            ], 400);
        }

        return response()->json([
            'status' => true,
            'message' => "price result",
            'data' => $priceResult
        ], 200);
    }
}
