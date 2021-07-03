<?php
use SlimVj\Modules\Home\Controllers\HomeController;
use SlimVj\Modules\Authentication\Controllers\LoginController;

use Slim\Factory\AppFactory;
use Psr\Container\ContainerInterface;
use DI\Container;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

require __DIR__ . '/../vendor/autoload.php';

define('ROOT', __DIR__.'/..');
define('TEMPLATES', ROOT.'/src/Templates');

$container = new Container();

$container->set(\Twig\Environment::class, function() {
  $loader = new \Twig\Loader\FilesystemLoader(TEMPLATES);
  $loader->addPath(TEMPLATES.'/Layouts', 'layouts');
  return new \Twig\Environment($loader, [
      'cache' => false,// ROOT.'/tmp/cache/twig',
  ]);
});

AppFactory::setContainer($container);
$app = AppFactory::create();
$app->get('/', [HomeController::class, 'index']);
$app->get('/auth', [LoginController::class, 'index']);
$app->run();
