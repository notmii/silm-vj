<?php
namespace SlimVj\Modules\Authentication\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use \Twig\Environment;

class LoginController
{
    private $view;

    public function __construct(
        \Twig\Environment $twigEnvironment
    ) {
        $this->view = $twigEnvironment;
        $this->view->getLoader()->addPath(__DIR__.'/../Templates', 'login');
    }

    public function index(
        ServerRequestInterface $request,
        ResponseInterface $response,
        array $args
    ): ResponseInterface {
        $response->getBody()->write($this->view->render('@login/index.html'));
        return $response;
    }
}
