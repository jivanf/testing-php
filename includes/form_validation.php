<?php

//Loops through the $_POST array and checks if user filled all the fields
foreach ($_POST as $key => $value) {
    $value = trim($value);
    if (empty($value)) {
        $missing[] = $key;
    }
}

//Validate user's email, if email is valid, add it to the $headers array, otherwise, add 'email-error' to the $missing array.
if (!$missing && !empty(getValueFromArray($_POST, 'email'))) {
    $validEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($validEmail) {
        $headers[] = "Reply-to: $validEmail";
    }

    else {
        $missing[] = 'email-error';
    }
}

if (!empty(getValueFromArray($_POST, 'confPassword')) && getValueFromArray($_POST, 'password') != getValueFromArray($_POST, 'confPassword')) {
    $missing[] = 'password-error';
}

if (!$missing) {
    $headers = implode("\r\n", $headers);
}

