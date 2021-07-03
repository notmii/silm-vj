<?php
namespace SlimVj\Modules\Home\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use \Twig\Environment;

class HomeController
{
    private $view;

    public function __construct(
        \Twig\Environment $twigEnvironment
    ) {
        $this->view = $twigEnvironment;
        $this->view->getLoader()->addPath(__DIR__.'/../Templates', 'home');
    }

    public function index(
        ServerRequestInterface $request,
        ResponseInterface $response,
        array $args
    ): ResponseInterface {
        $response->getBody()->write("Hello world!");
        return $response;
    }
}
