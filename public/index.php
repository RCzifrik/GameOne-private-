<?php
session_start();
//var_dump($_SESSION);
//var_dump($_POST);

    //include_once ('../templates/home.php');
    //include_once ('../templates/gameList.php');

require '../Modules/categories.php';
require '../Modules/login.php';
require '../Modules/logout.php';
require '../Modules/database.php';
require '../Modules/common.php';


$message = "";

$request = $_SERVER['REQUEST_URI'];

$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

//$params[1] is de action
//$params[2] is een extra getal die de action nodig heeft om zijn taak uit te voeren
switch ($params[1]) {

    case 'categories':
        $titleSuffix = ' | Categories';

        //var_dump($categories);die;
        include_once "../Templates/categories.php";
        break;

    case 'category':
        $id = $params[2];
        $products = getCategory($id);
        include_once "../Templates/home.php";
        break;

    default:
        $titleSuffix = ' | Home';
        $categories = getCategories();
        include_once "../Templates/home.php";
        //include_once "../templates/gameList.php";
        //include_once "../templates/gameDetail.php";
    break;
}
?>