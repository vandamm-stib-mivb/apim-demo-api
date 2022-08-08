<?php

declare(strict_types=1);

ini_set('date.timezone', 'Europe/Brussels');

if ('application/json' !== $_SERVER['CONTENT_TYPE']) {
    header('Content-Type: application/json', true, 400);
    echo '{"error": "Only JSON requests are allowed, please try again."}';
    return;
}

$queryParams = [];
if (isset ($_SERVER['QUERY_STRING'])) {
    parse_str($_SERVER['QUERY_STRING'], $queryParams);
}
$request = new StdClass();
$request->method = $_SERVER['REQUEST_METHOD'];
$request->body = json_decode(file_get_contents('php://input'), true);
$request->route = rtrim($_SERVER['PATH_INFO'] ?? '/', '/');
$request->query = $queryParams;

header('Content-Type: application/json');

if ('GET' === $request->method && '' === $request->route) {
    if (isset ($request->body['name'])) {
        echo '{"message":"Hello ' . $request->body['name'] . '!"}';
        return;
    }
    echo '{"message":"Hello World!"}';
    return;
}

if ('GET' === $request->method && '/ping' === $request->route) {
    echo json_encode(['message' => 'PONG']);
    return;
}

if ('GET' === $request->method && '/status' === $request->route) {
    header('X-Status-Date: ' . date('r'));
    header('Content-Type: application/json', true, 204);
    return;
}

if ('GET === $request->method' && '/foobar' === $request->route) {
    echo json_encode([
        'message' => 'When things go to pieces, this is often called FOOBAR',
    ]);
    return;
}

header('Content-Type: application/json', true, 404);
echo json_encode([
    'error' => sprintf('%s Not Found', $request->route),
]);
