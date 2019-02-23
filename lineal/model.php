<?php

if (!empty($_FILES['model_json'])) {
    if (is_file(__DIR__ . '/model.json')) {
        unlink(__DIR__ . '/model.json');
    }

    var_dump($_FILES);
    echo PHP_EOL;
    echo move_uploaded_file($_FILES['model_json']['tmp_name'],  __DIR__ . '/model.json');
    echo PHP_EOL;
    echo __DIR__ . '/model.json';
}