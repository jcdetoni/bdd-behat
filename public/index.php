<?php
/**
 * @date 09/07/21
 * @time 16:55
 */

require dirname(__DIR__) . '/vendor/autoload.php';

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new Aura\Router\RouterContainer();
$map = $routerContainer->getMap();

// add a route to the map, and a handler for it
$map->get('calculadora.index', '/calculadora/index', function ($request) {
    $response = new Laminas\Diactoros\Response();
    $loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/views');
    $twig = new \Twig\Environment($loader);
    $content = $twig->render('calculadora/index.twig', []);
    $response->getBody()->write($content);
    return $response;
});


// add a route to the map, and a handler for it
$map->post('calculadora.somar', '/calculadora/somar-positivo-menor-que-cem', function ($request) {
    $response = new Laminas\Diactoros\Response();
    $retorno = [
        'status' => true,
        'message' => 'Ok',
        'response' => null
    ];
    try {
        $somadorEspecial = new MySys\CalculosEspeciais\SomaPositivosMenoresDe100();
        $retorno['response'] = $somadorEspecial->somar($_POST['num1'], $_POST['num2']);
    } catch (Exception $exception) {
        $retorno['message'] = $exception->getMessage();
        $retorno['status'] = false;
    }
    $response->getBody()->write(json_encode($retorno));
    return $response;
});

// get the route matcher from the container ...
$matcher = $routerContainer->getMatcher();

// .. and try to match the request to a route.
$route = $matcher->match($request);
if (! $route) {
    echo "No route found for the request.";
    exit;
}

// add route attributes to the request
foreach ($route->attributes as $key => $val) {
    $request = $request->withAttribute($key, $val);
}

// dispatch the request to the route handler.
// (consider using https://github.com/auraphp/Aura.Dispatcher
// in place of the one callable below.)
$callable = $route->handler;
$response = $callable($request);

// emit the response
foreach ($response->getHeaders() as $name => $values) {
    foreach ($values as $value) {
        header(sprintf('%s: %s', $name, $value), false);
    }
}
http_response_code($response->getStatusCode());
echo $response->getBody();