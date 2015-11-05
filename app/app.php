<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/User.php";

    $app = new Silex\Application();
    $app['debug'] = true;

    $server = 'mysql:host=localhost;dbname=connect';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/..'
    ));

    //home page (sign up page)
    $app->get("/", function() use($app) {
        return $app['twig']->render('index.html');
    });

    $jsondata = file_get_contents('login.json');
    $data = json_decode($jsondata, true);

    return $app;

?>
