<?php
    //Start the session
    session_start();
    // require autoload file
    require_once('vendor/autoload.php');

    // create instance of base class
    $f3 = Base::instance();
    // set debug level
    $f3->set('DEBUG', 3);

    // define a default route using a template
    $f3->route('GET /', function() {
            $template = new Template();
            echo $template->render('pages/home.html');
        }
    );

    //Define a form 1(order) route
    $f3->route('GET /personal', function($f3, $params) {
            $template = new Template();
            echo $template->render('pages/form1.html');
        }
    );

    // run fat free
    $f3->run();