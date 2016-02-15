<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/PingPongGenerator.php';
//     use Symfony\Component\Debug\Debug;
// Debug::enable();


    $app = new Silex\Application();
    // $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider, array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get('/view_ping_pong', function() use ($app) {
        $inputted_number = $_GET['ending_number'];
        $new_PingPongGenerator = new PingPongGenerator;
        $results = array();

        for($i = 1; $i <= $inputted_number; $i++){
            $ping_pong_result = $new_PingPongGenerator->generatePingPongArray($i);
            array_push($results, $ping_pong_result);
        }
        return $app['twig']->render('results.html.twig', array('results' => $results));
    });

    return $app;
?>
