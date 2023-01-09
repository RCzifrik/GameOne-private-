<?php
    session_start();
    //var_dump($_SESSION);
    //var_dump($_POST);

        //include_once ('../templates/home.php');
        //include_once ('../templates/gameListMain.php');

    require '../Modules/categories.php';
    require '../Modules/login.php';
    require '../Modules/logout.php';
    require '../Modules/database.php';
    require '../Modules/common.php';
    require '../Modules/gamelist.php';
    require '../Modules/gameDetail.php';
    require '../Modules/getReview.php';



    $message = "";

    $request = $_SERVER['REQUEST_URI'];
    $params = explode("/", $request);
    $title = "GameOne";
    $titleSuffix = "";

    //$params[1] is de action
    //$params[2] is een extra getal die de action nodig heeft om zijn taak uit te voeren
    switch ($params[1]) {

        case 'categories':
            $titleSuffix = ' | Categories';

            //var_dump($categories);die;
            include_once "../templates/home.php";
            break;

        case '1':
        case '2':
        case '3':
        case '4':
        case '5':
        case '6':
            $titleSuffix = ' | Platformer';
            $games = getGamelist();
            include_once "../templates/gameList.php";
            break;

        case "Super%20Mario%20Bros":
        case "Need%20for%20Speed":
        case "Mario%20Kart":
        case "Crash%20Team%20Racing":
        case "Elden%20Ring":
        case "Dying%20Light":
            $detailGame = getDetailGames();
            $review = getReviews();
            include_once "../templates/gameDetail.php";
            break;

        default:
            $titleSuffix = ' | Home';
            $categories = getCategories();
            include_once "../templates/home.php";
            //include_once "../templates/gameListMain.php";
            //include_once "../templates/gameDetail.php";
        break;
    }
?>