<?php

$parola = 'parola';

$hash = password_hash($parola, PASSWORD_BCRYPT);

echo '<br>';
echo $parola;
echo '<br>';
echo $hash;