<?php
namespace App\Module\MediaModule;

use Zend\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;

class MediaPageAction
{

    private $router;

    private $template;

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        return new HtmlResponse('<h1>hello from apache</h1>');
        return new JsonResponse([
            'ack' => time()
        ]);
    }
}