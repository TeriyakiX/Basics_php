<?php
setcookie('login','0',time() - 3600);
setcookie('password','0',time() - 3600);
header('Location: index.php');
die();