<?php
session_start();
//function __autoload($class) {
//	require_once 'application/core/'.strtolower($class).'.php';
//}
// подключаем файлы ядра
require_once 'core/controller.php';
require_once 'core/model.php';
require_once 'core/db.php';
require_once 'vendor/simpledom/simple_html_dom.php';
require_once 'vendor/Twig/Autoloader.php';
Twig_Autoloader::register(true);


spl_autoload_register(function ($class) {
    $path = DIR_VENDOR . str_replace('\\', '/', $class) . '.php';

    if (is_file($path)) {
        require $path;
        return;
    }
    else {
    	$pathMy = __DIR__ . '/' .  substr($class, 0, strpos($class, '_')) . '/' .str_replace('\\', '/', $class) . '.php';
	     if (is_file($pathMy)) {
            require $pathMy;
            return;
        }
    }
    throw new \LogicException(sprintf('Class "%s" not found in "%s" and in "%s"', $class, $path, $pathMy));
});

require_once 'core/router.php';

