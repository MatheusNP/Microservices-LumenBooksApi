<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiResponser {

    /**
     * Build success responses;
     *
     * @param object $data
     * @param integer $code
     * @return JsonResponse
     */
    public function successResponse(object $data, int $code = Response::HTTP_OK): JsonResponse
    {
        return response()->json(['data' => $data], $code);
    }

    /**
     * Build error responses;
     *
     * @param string $message
     * @param integer $code
     * @return JsonResponse
     */
    public function errorResponse(string $message, int $code): JsonResponse
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}
