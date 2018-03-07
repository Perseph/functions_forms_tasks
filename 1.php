<?php

/*$_POST += array(
    'word1' => null,
    'word2' => null
);*/
function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}

$a = explode(" ",requestPost('word1'));
$b = explode(" ",requestPost('word2'));

function getCommonWords($a, $b)
{
    $result = [];
    foreach ($a as $key => $value){
        for($i = 0;$i < count($b);$i++){
            if($value == $b[$i]){
                array_push($result,$value);
            }
        }
    }
    return ($result);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First task</title>
</head>
<body>
        <form method="post">
            <textarea name="word1"></textarea>
            <textarea name="word2"></textarea>
            <button type="submit">+</button>
        </form>
    <pre><?=print_r(getCommonWords($a, $b), 1);?></pre>
</body>
</html>
