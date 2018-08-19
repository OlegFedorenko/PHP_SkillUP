<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hometask</title>
</head>
<body>

<?php

echo '<br>'.'*** Task 5 ***'.'<br>';

$sec = time() - mktime(7,23,48).'<br>';

echo 'Seconds: '.$sec;
echo 'Hours: '.(($sec - $sec%3600)/3600).'<br>';


echo '<br>'.'*** Task 9 ***'.'<br>';

$weekDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

echo '12.12.2012 was '.$weekDays[date('w', mktime(0,0,0,12,12,2012))].'<br>';
echo 'My first birthday was '.$weekDays[date('w', mktime(0,0,0,1,13,1987))].'<br>';


echo '<br>'.'*** Task 12 ***'.'<br>';
?>
<form method="get">
    <input type="text", name="year">
    <input type="submit">
</form>
<?php
    if (!empty($_REQUEST['year']))
    {
        $year = $_REQUEST['year'];
        if (date('L', mktime(0,0,0,1,1,$year)) == 1)
        {
            echo $year.' is a leap-year'.'<br>';
        }
        else
        {
            echo $year.' isn\'t a leap-year'.'<br>';
        }
    }
    else
    {
        echo '<a style="color: crimson">You have entered nothing!</a>'.'<br>';
    }


echo '<br>'.'*** Task 18 ***'.'<br>';

$date = date_create('2025-12-31');
echo 'Base date: '.date_format($date, 'd.m.Y').'<br>';

$date1 = date_modify($date, '2 days');
echo '+ 2 days: '.date_format($date, 'd.m.Y').'<br>';

$date2 = date_modify($date, '3 days 1 month');
echo '+ 3 days and 1 month: '.date_format($date, 'd.m.Y').'<br>';

$date3 = date_modify($date, '1 year');
echo '+ 1 year: '.date_format($date, 'd.m.Y').'<br>';

$date4 = date_modify($date, '-3 days');
echo '- 3 days: '.date_format($date, 'd.m.Y').'<br>';


echo '<br>'.'*** Task 19 ***'.'<br>';

$secondsLeft = mktime(0,0,1,1,1,date('Y')+1) - time();

echo 'Today: '.date('d.m.Y').'<br>';
echo 'New year will come after '.(($secondsLeft - $secondsLeft%86400)/86400).' whole days';
?>

</body>
</html>