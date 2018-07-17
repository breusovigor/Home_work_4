<?php
//Task 1
/*if (!isset($_COOKIE['visitOnPage'])){
    setcookie('visitOnPage', 'Cookie', time() + 3600 * 10);
    echo 'Welcome, newbie' . '</br>';
} else {
    echo 'Welcome to the club, buddy!' . '</br>';
}*/

//Task 2
/*if (isset($_COOKIE['last'])){
    $last = $_COOKIE['last'];
    setcookie('last', date('Y-m-d H:i:s'), time()+3600*24*31);
} else {
    $last = 'Never';
}
echo $last;*/

// Task 3
$counter = $_COOKIE['counter'];
if (isset($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'];
} else {
    $counter = 0;
}
$counter++;
setcookie('counter', $counter);
echo $counter;
?>