<?php

chdir(__DIR__ . '/../');

require 'vendor/autoload.php';

use Siler\Diactoros;
use Siler\Dotenv;
use Siler\Functional as f;
use Siler\Route;
use Siler\Twig;
use function Siler\array_get;

$request = Diactoros\request();

Dotenv\init('.');

call_user_func(function () use ($request) {
    $twig = Twig\init('templates', Dotenv\env('TWIG_CACHE_DIR', 'cache'), Dotenv\env('TWIG_DEBUG', false));
    $twig->addFunction(new Twig_SimpleFunction('url', 'Siler\Http\url'));
});

$response = null;

$response = Route\get('/', function () use ($request) {
    return Diactoros\html(
        Twig\render('index.twig')
    );
}, $request) ?? $response;

$response = Route\get('/hello/?{name}?', function ($params) use ($request) {
    return Diactoros\html(
        Twig\render('hello.twig', [
            'greeting' => array_get($request->getQueryParams(), 'greeting', 'Hello', true),
            'name' => array_get($params, 'name', 'World'),
        ])
    );
}, $request) ?? $response;

Diactoros\emit($response ?? Diactoros\html(Twig\render('404.twig'), 404));
