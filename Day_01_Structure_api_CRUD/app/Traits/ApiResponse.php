<?php

namespace App\Traits;

trait ApiResponse
{
    protected function success($data = null, $message = 'Operation successful', $code = 200, $extra = [])
    {
        $response = [
            'status' => true,
        ];

        if ($message) {
            $response['message'] = $message;
        }

        if ($data !== null) {
            $response['data'] = $data;
        }

        if (!empty($extra)) {
            $response = array_merge($response, $extra);
        }

        return response()->json($response, $code);
    }

    protected function error($message = 'Somthing went wrong', $code = 400)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
        ], $code);
    }
}