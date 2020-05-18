<?php
/**
    David Haas
    4/29/20
    https://dhaas417.greenriverdev.com/328/dating/
    Pet dating website
*/

//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');
require_once ('model/data-layer.php');

session_start();

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function () {

    $view = new Template();
    echo $view->render('views/home.html');
});

//Define a personal info route
$f3->route('GET|POST /personal_info', function($f3)
{
    //Check if the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //Data is valid
        $_SESSION['fName'] = $_POST['fName'];
        $_SESSION['lName'] = $_POST['lName'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['phone'] = $_POST['phone'];

        //Redirect to the profile route
        $f3->reroute("profile");
    }

    $f3->set('fName', $_POST['fName']);

    $view = new Template();
    echo $view->render('views/personal_info.html');
});

//Define a profile route
$f3->route('GET|POST /profile', function($f3)
{
    $states = getStates();

    //Check if the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //Data is valid
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['state'] = $_POST['state'];
        $_SESSION['seeking'] = $_POST['seeking'];
        $_SESSION['biography'] = $_POST['biography'];

        //Redirect to the interests route
        $f3->reroute("interests");
    }

    $f3->set('states', $states);
    $view = new Template();
    echo $view->render('views/profile.html');
});

//Define an interests route
$f3->route('GET|POST /interests', function($f3)
{
    $indoors = getIndoorInterests();
    $outdoors = getOutdoorInterests();

    //Check if the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        //Data is valid
        $_SESSION['indoors'] = $_POST['indoors'];
        $_SESSION['outdoors'] = $_POST['outdoors'];

        //Redirect to the summary route
        $f3->reroute("summary");
    }

    $f3->set('indoors', $indoors);
    $f3->set('outdoors', $outdoors);

    $view = new Template();
    echo $view->render('views/interests.html');
});

//Define a summary route
$f3->route('GET /summary', function()
{
    $view = new Template();
    echo $view->render('views/summary.html');
});

//Run fat free
$f3->run();