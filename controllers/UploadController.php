<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class UploadController {
    public function upload(ServerRequestInterface $request, ResponseInterface $response, array $args) : ResponseInterface {
        $size = $request->getBody()->getSize() ?? 'null';
        $contentLength = $request->getHeader('Content-Length')[0];
        $result = "Content-Length was: $contentLength, Body size was: $size";
        $response->getBody()->write($result);
        return $response;
    }
}