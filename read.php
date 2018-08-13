<?php
if(isset($_COOKIE['test']))
{
    echo 'WOW!';
}
else
{
    echo 'D`oh!!!';
}

isset($_COOKIE['test']) ? $value='wow' : $value='doh';/** Тернарный оператор */

echo $value;
