<?php
require_once "config.php";
ob_start();
$uri = $_SERVER["REQUEST_URI"];
$cleaned = explode("?", $uri)[0];

route('/', 'homeController');
route('/bank', 'bankController');
route('/biztositas', 'insuranceController');
route('/penztarak', 'checkoutController');
route('/megtakaritas', 'savingsController');

list($view, $data) = dispatch($cleaned, 'notFoundController');
if (preg_match("%^redirect\:%", $view)) {
    $redirectTarget = substr($view, 9);
    header("Location:" . $redirectTarget);
    die;
}
extract($data);
ob_clean();
require_once "templates/layout.php";