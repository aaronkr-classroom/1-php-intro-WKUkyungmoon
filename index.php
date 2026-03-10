<?php
//$color = 'green'; // 3+5
$nothing = "<h1 style='color: red'>Nothing</h1>";
$to = "<h2 style='color: orange'>to</h2>";
$see = "<h3 style='color: green'>see</h3>";
$here = "<h4 style='color: purple'>here.</h4>";

$color = 'blue';

$text = "<h1 style='color: $color '>";
$text .= "Nothing to see here."; // x += 3;
$text .= "</h1>";
// $text 를 연달아 사용할 시 중첩 되지 않고 마지막 구문만 출력됨
// $text 뒤에 . 을 붙일 시 중첩
echo $text;
echo $nothing .' '. $to .' '. $see . ' '. $here;
//echo = print문
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Aaron's PHP Page! </title> 
    </head>
    <body>
        <h1 style="font=size: 48pt">
            Nothing to see here!
            <? = $text ?>
        </h1>
    </body>
</html>
