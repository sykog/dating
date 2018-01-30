<?php
    //Start the session
    session_start();
    // require autoload file
    require_once('vendor/autoload.php');

    // create instance of base class
    $f3 = Base::instance();
    // set debug level
    $f3->set('DEBUG', 3);
    $f3->set('states', array( "Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware",
            "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana",
            "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska",
            "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio",
            "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont",
            "Virginia","Washington","West Virginia","Wisconsin","Wyoming"));

    // define a default route using a template
    $f3->route('GET /', function() {
            $template = new Template();
            echo $template->render('pages/home.html');
        }
    );

    //Define a form 1 route
    $f3->route('GET|POST /personal', function($f3, $params) {
            if(isset($_POST['submit'])){
                $first = $_POST['first'];
                $last = $_POST['last'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $phone = $_POST['phone'];

                $_SESSION['first'] = $first;
                $_SESSION['last'] = $last;
                $_SESSION['age'] = $age;
                $_SESSION['gender'] = $gender;
                $_SESSION['phone'] = $phone;

                include('model/validate.php');

                $f3->set('first', $first);
                $f3->set('last', $last);
                $f3->set('age', $age);
                $f3->set('gender', $gender);
                $f3->set('phone', $phone);
                $f3->set('errors', $errors);
                $f3->set('success', $success);
            }

            $template = new Template();
            echo $template->render('pages/form1.html');
        }
    );

    //Define a form 2 route
    $f3->route('GET|POST /profile', function($f3, $params) {
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $state = $_POST['state'];
                $bio = $_POST['bio'];
                $seeking = $_POST['seeking'];

                $_SESSION['email'] = $email;
                $_SESSION['state'] = $state;
                $_SESSION['bio'] = $bio;
                $_SESSION['seeking'] = $seeking;

                include('model/validate.php');

                $f3->set('email', $email);
                $f3->set('state', $state);
                $f3->set('bio', $bio);
                $f3->set('seeking', $seeking);
            }

            $template = new Template();
            echo $template->render('pages/form2.html');
        }
    );

    //Define a form 3 route
    $f3->route('GET|POST /interests', function($f3, $params) {
            if(isset($_POST['submit'])){
                $indoor = $_POST['indoor'];
                $outdoor = $_POST['outdoor'];

                $_SESSION['indoor'] = $indoor;
                $_SESSION['outoor'] = $outdoor;

                include('model/validate.php');

                $f3->set('indoor', $indoor);
                $f3->set('outdoor', $indoor);
            }

            $template = new Template();
            echo $template->render('pages/form3.html');
        }
    );

    // run fat free
    $f3->run();