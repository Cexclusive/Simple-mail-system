<!DOCTYPE html>
<html>
    <head>
        <title>Cexclusive By MD Murad Khan</title>
        <link href="style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="stracture">
            <div class="contact">
                <h2>Contact Us</h2>
            </div>
            <div class="form">

                <center>
                    <form action="index.php" method="POST" >
                        <input type="text" name="from" placeholder="Enter Your Mail" ><br><br>
                        <input type="text" name="to" placeholder="To" disabled=""><br><br>
                        <input type="text" name="subject" placeholder="Subject" ><br><br>
                        <textarea rows="8" cols="70" placeholder="message" name="message">

                        </textarea><br>
                        <button value="Send">Submit</button>

                    </form>
                </center>
            </div>
        </div>


        <?php
        if (isset($_POST['subject'], $_POST['message'], $_POST['from'])) {

            $from = filter_var($_POST['from'], FILTER_VALIDATE_EMAIL);
            if ($from == true) {
                mail('mdmuradkhan22@gmail.com', $_POST['subject'], $_POST['message'], 'From:' . $from);

                echo "<center>Email Send</center>";
            } else {
                echo "<center>Email not validate</center>";
            }
        } else {
            echo "<center>Please fill up the form correctly</center>";
        }

        echo "</body>";
        echo "</html>";
