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
    require '../Modules/register.php';



    $_SESSION['message'] = "";
    $message = "";

    $request = $_SERVER['REQUEST_URI'];
    $params = explode("/", $request);
    $title = "GameOne";
    $titleSuffix = "";

    //$params[1] is de action
    //$params[2] is een extra getal die de action nodig heeft om zijn taak uit te voeren
    switch ($params[1]) {

        case 'login':

            $titleSuffix = ' | Login';
            if (isset($_POST['login'])) {
                $result = checkLogin();

                switch ($result) {
                    case 'ADMIN':
                        include_once "../templates/adminHome.php";
                        break;
                    case 'MEMBER':
                        include_once "../templates/memberHome.php";
                        break;
                    case 'FAILURE':
                        $_SESSION['message'] = "Email of wachtwoord niet correct ingevuld!";
                        include_once "../templates/login.php";
                        break;
                    case 'INCOMPLETE':
                        $_SESSION['message'] = "Formulier niet volledig ingevuld!";
                        include_once "../templates/login.php";
                        break;
                }
            } else {
                include_once "../templates/login.php";
            }
            break;


        case 'registreren':
            $titleSuffix = ' | Registreren';

            if (isset($_POST['submit'])) {
                $result = makeRegistration();
                switch ($result) {
                    case 'SUCCESS':
                        include_once "../templates/memberHome.php";
                        break;
                    case 'INCOMPLETE':
                        $_SESSION['message'] = "Niet alle velden zijn correct ingevuld";
                        include_once "../templates/register.php";
                        break;
                    case 'EXIST':
                        $_SESSION['message'] = "Gebruiker bestaat al";
                        include_once "../templates/register.php";
                        break;
                }
            } else {
                include_once "../templates/register.php";
            }
            break;

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
            include_once "../templates/gameDetail.php";
            break;


        case 'contact':
            $titleSuffix = ' | Contact';
            include_once "../templates/contact.php";
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