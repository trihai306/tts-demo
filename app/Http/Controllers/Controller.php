<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function sendSuccess($data, $code = 200, $message = '')
    {
        return response()->json([
            'data' => $data,
            'success' => true,
            'message' => $message,
        ], $code);
    }

    public function sendError($data = null, $code = 400, $message = '')
    {
        return response()->json([
            'data' => $data,
            'success' => false,
            'message' => $message,
        ], $code);
    }
}
