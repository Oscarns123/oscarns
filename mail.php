<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name. "<".$email.">\r\n"

$recipient = "oscarskjaevestad@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die('Error!')

echo'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" href="form/style2.css">
</head>

<body>
    <div class="container">
        <h1>Takk for at du tok kontakt. Jeg svarer deg så fort som mulig!</h1>
        <p class "back">Tilbake til <a href="index.html"> hovedsiden</a>
        </p>
    </div>
</body>

</html>
';

?>