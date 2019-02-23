<?php

if (!empty($_FILES['model_json'])) {
    if (is_file(__DIR__ . '/model.json')) {
        unlink(__DIR__ . '/model.json');
    }
    if (is_file(__DIR__ . '/model.weights.bin')) {
        unlink(__DIR__ . '/model.weights.bin');
    }

    move_uploaded_file($_FILES['model_json']['tmp_name'],  __DIR__ . '/model.json');
    move_uploaded_file($_FILES['model_weights_bin']['tmp_name'],  __DIR__ . '/model.weights.bin');
}