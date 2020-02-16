<?php



    if (!defined('ROOT')) define('ROOT', dirname(__DIR__));
    if (!defined('WWW')) define('WWW', ROOT . '/public');
    if (!defined('APP')) define('APP', ROOT . '/app');
    if (!defined('CORE')) define('CORE', ROOT . '/resources');
    if (!defined('LIBS')) define('LIBS', ROOT . '/resources/libs');
    if (!defined('CACHE')) define('CACHE', ROOT . '/tmp/cache');
    if (!defined('CONF')) define('CONF', ROOT . '/config');
    if (!defined('LAYOUT')) define('LAYOUT', ROOT . 'app.blade.php');
    if (!defined('GALLERY')) define('GALLERY', ROOT . '/public/unloads/gallery');
    if (!defined('IMG')) define('IMG', ROOT . '/public/unloads/single');

    $host = false;

    if (isset($_SERVER['HTTP_HOST'])) {
        $host = $_SERVER['HTTP_HOST'];
    }

    $allowed_hosts = 'https://localhost:8080/index.php';
//    dd($allowed_hosts);

    $app_path = preg_replace("#[^/]+$#",'',$allowed_hosts);
    //https://localhost:8080/index.php

    $app_path = preg_replace('/public/', '', $app_path);

    if (!defined('PATH')) define('PATH',  $app_path);
    if (!defined('ADMIN')) define('ADMIN', PATH . 'admin/index');

//    dd($allowed_hosts,$app_path,PATH,ADMIN);
