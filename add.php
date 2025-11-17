<?php
//password
$password ="223611017";

//mengekripsi password
$hash =password_hash($password, PASSWORD_DEFAULT);

echo "$hash";