<?php

if (!empty($_FILES['model_json'])) {
    if (is_file('model.json')) {
        unlink('model.json');
    }

    move_uploaded_file($_FILES["model_json"]["tmp_name"],  'model.json');
}