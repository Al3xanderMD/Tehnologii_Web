<?php global $mysqli;
include 'database.php';
include '../controllers/ControllerChestionare.php'?>
<?php $number=$_SESSION['number']; ?>
<?php
    $uri = $_SERVER['REQUEST_URI'];
    $parameters = parse_url($uri, PHP_URL_QUERY);
    parse_str($parameters, $params);
    $requestMethod = $_SERVER["REQUEST_METHOD"];
    $controller = new ControllerChestionare($number, $requestMethod);
    $controller->processRequest();
   $next = $number + 1;
    if ($number%5 == 0) {
        header("Location: final.php");
        exit();
    } else {
$resp=$_SESSION['response1'];
        header("Location: question.php?n=" . $next);
}
?>
