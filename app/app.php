<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/PingPongGenerator.php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider, array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get('/view_ping_pong', function() use ($app) {
        $inputted_number = $_GET['ending_number'];
        $new_PingPongGenerator = new PingPongGenerator;
        $results = $new_PingPongGenerator->generatePingPongArray($inputted_number);
        return $app['twig']->render('results.html.twig', array('results' => $results));
    });

    return $app;
?>
