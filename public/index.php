<?php

include '../vendor/autoload.php';
$env = new \Bootstrap\EnvCustom('../.env');
$env->load();
var_dump($_ENV);
