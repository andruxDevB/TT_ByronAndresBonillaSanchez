<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller as Controller;


class BaseController extends Controller
{
    // Success response method
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message
        ];

        return response()->json($response,200);
    }

    // Return error response
    public function sendError($error, $errorMessages = [], $code = 400)
    {
        $response = [
            'success' => false,
            'message' => $error
        ];

        if(!empty($errorMessages))
        {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}
