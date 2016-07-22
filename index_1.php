<?php

if (isset($_POST['subject'], $_POST['message'], $_POST['from'])) {

    $from = filter_var($_POST['from'], FILTER_VALIDATE_EMAIL);
    if ($from == true) {
        mail('mdmuradkhan22@gmail.com', $_POST['subject'], $_POST['message'], 'From:' . $from);

        echo "Email Send";
    } else {
        echo "Email not validate";
    }
} else {
    echo "Please fill up the form correctly";
}


