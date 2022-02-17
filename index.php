<?php

// Автозагрузка классов

spl_autoload_register(function ($cls){
    include_once "$cls.php";
});
try {
    $form = new \models\FormRegister();
    echo $form->render();
} catch (Exception $exception){
    include_once "error.php";
}