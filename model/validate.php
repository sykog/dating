<?php
    // create empty array of errors
    $errors = array();

    // only check conditions when on page
    if($_SERVER['REQUEST_URI'] == "/328/dating/personal") {
        if(!validName($first)){
            $errors['first'] = "Please enter a valid name.";
        }
        if(!validName($last)){
            $errors['last'] = "Please enter a valid name.";
        }
        if(!validAge($age)){
            $errors['age'] = "Must be 18 or older.";
        }
        if(!validPhone($phone)){
            $errors['phone'] = "Invalid. Numbers and dashes only.";
        }
    }

    if ($_SERVER['REQUEST_URI'] == "/328/dating/interests") {
        if (!validIndoor($indoor)) {
            $errors['indoors'] = "Please select valid activities.";
        }
        if (!validOutdoor($outdoor)){
            $errors['outdoors'] = "Please select valid activities.";
        }
    }

    // must be true to submit
    $success = sizeof($errors) == 0;

    // name must be alphabetic
    function validName($name){
        return ctype_alpha($name);
    }

    // must be at least 18
    function validAge($age){
        return $age >= 18;
    }

    // only numbers and dashes (10 digits)
    function validPhone($phone){
        if (is_numeric($phone) || (strpos($phone, "-") && !ctype_alpha($phone))){
            if (strpos($phone, "-") && (strlen($phone) == 12)){
                return true;
            }
            if (strlen($phone) == 10){
                return true;
            }
        }
        return false;
    }

    // must be one of the checkboxes
    function validIndoor($activities) {
        global $f3;
        $inside = true;
        foreach ($activities as $activity)
        {
            $inside = in_array($activity, $f3->get('indoors'));
        }
        return $inside;
    }

    // must be one of the checkboxes
    function validOutdoor($activities) {
        global $f3;
        $outside = true;
        foreach ($activities as $activity)
        {
            $outside = in_array($activity, $f3->get('outdoors'));
        }
        return $outside;
    }
