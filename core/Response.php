<?php

namespace App\core;

class Response
{
  public static function json($data, $statusCode)
  {
    http_response_code($statusCode);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit();
  }
}
