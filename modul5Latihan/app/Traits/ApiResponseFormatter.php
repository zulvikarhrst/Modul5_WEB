<?php

namespace app\Traits;

trait ApiResponseFormatter
{
    public function apiResponse($code = 200, $message = "Success", $data = [])
    {
        return json_encode([
            "code" => $code,
            "messsage" => $message,
            "data" => $data
        ]);
    }
}
