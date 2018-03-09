<?php

function requestPost($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}

function calc($string)
{
    $arr = explode(' ',requestPost($string));
    $arr = array_count_values($arr); 
    /** @see http://php.net/manual/en/function.sort.php */
    sort($arr, SORT_NUMERIC);
    return $arr;
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

<pre>
<?php
print_r(calc('sent'));
?>
</pre>

</body>
</html>
