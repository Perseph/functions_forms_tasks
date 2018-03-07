<?php

function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}

$arr = explode(' ',requestPost('sent'));

var_dump($arr);

function top3($arr)
{
    $counters = [];
    foreach ($arr as $value){
        $long = strlen($value);
        array_push($counters,$long);
    }
    sort($counters,SORT_NUMERIC);
    var_dump($counters);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Second task</title>
</head>
<body>

<form method="post">
    <textarea name="sent"></textarea>
    <button type="submit">Push</button>
</form>
<?=print_r(top3($arr),1)?>

</body>
</html>
