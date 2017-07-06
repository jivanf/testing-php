<?php
function getValueFromArray($array, $name) {
    foreach ($array as $key => $value) {
        if ($key == $name) {
            return $value;
        }
    }
}

$missing = [];
$to = getValueFromArray($_POST, 'email');
$subject = "Feedback from online form";
$message = "Thank you for joining our website!" . "\n" .
    "<a href = \"http://example.com\">Click here to register!</a>" . "\n" .
"Account Details: " . "\n" .
"Name" . ":" . " " . getValueFromArray($_POST, 'username') . "\n" .
"Email" . ":" . " " . getValueFromArray($_POST, 'email') . "\n" .
"Password" . ":" . " " . getValueFromArray($_POST, 'password') . "\n";

$headers = [];
$headers[] = "From: jivan.flores.108@gmail.com";
$headers[] = "Content-type: text/plain; charset=utf-8";
$authorized = null;
require 'form_validation.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>

<body>
<h1>Sign Up</h1>
<form name="userInfo" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <label>
        <?php if($_POST && in_array('username', $missing)) {
            echo "<span class='warning'>Please type a name</span>";
            echo "<br>";
        } ?>
        Username
        <input id="name" name="username" type="text"

            <?php
            if ($_POST && !in_array('username', $missing)) {

                echo "value='" . htmlspecialchars(getValueFromArray($_POST, 'username')) . "'";
        } ?> />
    </label>
    <label>

        <?php if($_POST && in_array('email', $missing)) {
            echo "<span class='warning'>Please type an email</span>";
            echo "<br>";

        } elseif ($_POST && in_array('email-error', $missing)) {
            echo "<span class='warning'>Invalid email address</span>";
            echo "<br>";
        }
        ?>
        E-Mail
        <input id="name" name="email" type="email" <?php

        if ($_POST && !in_array('email', $missing) || !in_array('email-error', $missing)) {

            echo "value='" . htmlspecialchars(getValueFromArray($_POST, 'email')) . "'";
        } ?>/>

    </label>
    <label>

    <label>

        <?php if($_POST && in_array('password', $missing)) {
            echo "<span class='warning'>Please type a password</span>";
            echo "<br>";
        } ?>
        Password
        <input id="password" name="password" type="password" <?php

        if ($_POST && !in_array('password', $missing)) {

            echo "value='" . htmlspecialchars(getValueFromArray($_POST ,'password')) . "'";
        } ?>/>

    </label>
    <label>

        <?php if($_POST && in_array('confPassword', $missing)) {
            echo "<span class='warning'>Please confirm your password</span>";
            echo "<br>";
        } ?>

        <?php if($_POST && in_array('password-error', $missing)) {
            echo "<span class='warning'>Passwords don't match</span>";
            echo "<br>";
        } ?>

        Confirm password
        <input id="confPassword" name="confPassword" type="password" <?php

        if ($_POST && (!in_array('confPassword', $missing) || !in_array('password-error', $missing))) {

            echo "value='" . htmlspecialchars(getValueFromArray($_POST, 'confPassword')) . "'";
        } ?>/>

    </label>

    <button id="resetForm">Continue</button>
</form>

<?php
if ($_POST && empty($missing)) {
    $mailSent = mail($to, $subject, $message, $headers, $authorized);
    if (!$mailSent) {
        echo "<p class='warning'>Unable to send email, please try again later</p>";
    }

    else {
        header('Location: success.html');
        exit();
    }
}
?>





</body>

</html>