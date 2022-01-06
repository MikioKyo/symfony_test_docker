<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_lucky_number' => [[], ['_controller' => 'App\\Controller\\LuckyController::number'], [], [['text', '/lucky/number']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/']], [], [], []],
    'app_gallery_upload' => [[], ['_controller' => 'App\\Controller\\HomeController::upload'], [], [['text', '/upload']], [], [], []],
    'app_gallery_delete' => [[], ['_controller' => 'App\\Controller\\HomeController::delete'], [], [['text', '/delete']], [], [], []],
    'app_gallery_update' => [[], ['_controller' => 'App\\Controller\\HomeController::update'], [], [['text', '/update']], [], [], []],
];
