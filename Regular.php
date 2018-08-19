<?php

echo '<h3>Part 1</h3>';

echo '*** Task 2 ***'.'<br>';
$baseString = 'aba aca aea abba adca abea';
echo $baseString.'<br>';
echo preg_replace('#a..a#','@',$baseString).'<br>';

echo '<br>'.'*** Task 5 ***'.'<br>';
$baseString = 'aa aba abba abbba abca abea';
echo $baseString.'<br>';
echo preg_replace('#ab*a#','@',$baseString).'<br>';

echo '<br>'.'*** Task 9 ***'.'<br>';
$baseString = '2+3 223 2223';
echo $baseString.'<br>';
echo preg_replace('#2\+3#','@',$baseString).'<br>';

echo '<br>'.'*** Task 14 ***'.'<br>';
$baseString = 'aba accca azzza wwwwa';
echo $baseString.'<br>';
echo preg_replace('#a.+?a#','@',$baseString).'<br>';

echo '<h3>Part 2</h3>';

echo '*** Task 5  ***'.'<br>';
$baseString = 'a1a a22a a333a a4444a a55555a aba aca';
echo $baseString.'<br>';
echo preg_replace('#a\d{1,}a#','@',$baseString).'<br>';

echo '<br>'.'*** Task 8  ***'.'<br>';
$baseString = 'ave a#b a2b a$b a4b a5b a-b acb';
echo $baseString.'<br>';
echo preg_replace('#a\Wb#','@',$baseString).'<br>';

echo '<br>'.'*** Task 19  ***'.'<br>';
$baseString = 'aAXa aeffa aGha aza ax23a a3sSa';
echo $baseString.'<br>';
echo preg_replace('#a[a-z0-9]+a#','@',$baseString).'<br>';
