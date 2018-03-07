<?php

function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}

function upStr($string)
{
    $c = explode('.', requestPost($string));
    $c[0] = ' ' . $c[0];
    foreach ($c as $key => $d) {
        $c[$key] = mb_strtoupper(mb_substr($d, 1, 1)) . mb_substr($d, 2, strlen($d));
    }
    return implode('. ', $c);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post">
    <textarea name="sent"></textarea>
    <button type="submit">Push</button>
</form>

<?php
echo upStr('sent');
?>

</body>
</html>
