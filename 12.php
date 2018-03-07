<?php

function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}

function rev_st($string)
{
    $c = explode('.',requestPost($string));
    for ($i = 0; $i < count($c); $i++){
        if ($i == 0){
            $c[$i] = ' ' . $c[$i] . '.';
        }
        elseif ($i == count($c) - 1){
            unset($c[$i]);
        }
    }
    $b = array_reverse($c);
    return implode('.', $b);
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
echo rev_st('sent');
?>

</body>
</html>
