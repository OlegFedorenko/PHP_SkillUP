<?php

date_default_timezone_set('UTC');

setcookie('age1', mt_rand(10,70), time()+60*60);
setcookie('age2', mt_rand(10,70), time()+60*60*3);
setcookie('age3', mt_rand(10,70), time()+60*60*24);
setcookie('age4', mt_rand(10,70), time()+60*60*24*365);
setcookie('age5', mt_rand(10,70), time()+60*60*24*365*10);
setcookie('age6', mt_rand(10,70), mktime(23,59,59));
setcookie('age7', mt_rand(10,70), mktime(23,59,59,12,31));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hometask Cookies 1</title>
</head>
<body>
    <?='<br>'.'*** Task 3 ***'.'<br><br>'; ?>
    <a>setcookie('age1', mt_rand(10,70), time()+60*60); // 1 hour</a><br>
    <a>setcookie('age2', mt_rand(10,70), time()+60*60*3); // 3 hours</a><br>
    <a>setcookie('age3', mt_rand(10,70), time()+60*60*24); // 1 day</a><br>
    <a>setcookie('age4', mt_rand(10,70), time()+60*60*24*365); // 1 year</a><br>
    <a>setcookie('age5', mt_rand(10,70), time()+60*60*24*365*10); // 10 years</a><br>
    <a>setcookie('age6', mt_rand(10,70), mktime(23,59,59)); // till the end of current day</a><br>
    <a>setcookie('age7', mt_rand(10,70), mktime(23,59,59,12,31)); // till the end of current year </a><br>

    <?='<br>'.'*** Task 6 ***'.'<br><br>';?>
    <form action="Cookies2.php" method="get">
        <h3>Push the button!</h3>
        <input type="submit">
    </form>
</body>
</html>


