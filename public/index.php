<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Factory\AppFactory;

ini_set('date.timezone', 'Europe/Brussels');

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

require_once __DIR__ . '/../vendor/autoload.php';

define('DEFAULT_CONTENT_TYPE', 'application/json');

$app = AppFactory::create();
$app->addRoutingMiddleware();

$jsonMiddleware = function (Request $request, RequestHandler $handler) {
    $response = $handler->handle($request);
    return $response->withHeader('Content-Type', DEFAULT_CONTENT_TYPE);
};

$app->add($jsonMiddleware);

$errorMiddleware = $app->addErrorMiddleware(true, true, true);
$errorHandler = $errorMiddleware->getDefaultErrorHandler();
$errorHandler->forceContentType(DEFAULT_CONTENT_TYPE);

$app->get('/', function (Request $request, Response $response): Response {
    $requestData = json_decode($request->getBody()->getContents(), true);
    $message = sprintf('Hello %s!', $requestData['name'] ?? 'World');
    $payload = json_encode(['message' => $message]);
    $response->getBody()->write($payload);
    return $response;
});

$app->get('/ping', function (Request $request, Response $response): Response {
    if (null !== $request) {
        unset($request);
    }
    $payload = json_encode(['message' => 'pong']);
    $response->getBody()->write($payload);
    return $response;
});

$app->get('/status', function (Request $request, Response $response): Response {
    if (null !== $request) {
        $request = null;
    }
    $payload = json_encode([
        'status' => [
            'memory' => memory_get_usage(true),
            'free_disk_space' => disk_free_space('.'),
            'errors' => 0,
        ],
    ]);
    $response->getBody()->write($payload);
    return $response;
});

$app->run();