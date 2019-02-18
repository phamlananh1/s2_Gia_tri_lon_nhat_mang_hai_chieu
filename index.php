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
<h2>Tìm giá trị lớn nhất</h2>

<?php
$arr = array(
    [4,5,7],
    [9,1,5],
    [3,4,9]
);
function findMax($array)
{
    $max = $array[0][0];
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            if ($max < $array[$i][$j]) {
                $max = $array[$i][$j];
            }
        }
    }
    return  $max;
}
 echo "Max is: " . findMax($arr)
 ?>
</body>
</html>