<?php

function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}

function rev($string)
{
    $a = strrev($string);
    return $a;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>9</title>
</head>
<body>

<form method="post">
    <textarea name="sent"></textarea>
    <button type="submit">Push</button>
</form>

<?=rev(requestPost('sent'))?>

</body>
</html>
