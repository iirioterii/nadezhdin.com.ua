<?php
session_start();
//function __autoload($class) {
//	require_once 'application/core/'.strtolower($class).'.php';
//}
// подключаем файлы ядра
require_once 'core/controller.php';
require_once 'core/model.php';
//require_once 'core/view.php';
require_once 'core/db.php';
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
/*
Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
	> аутентификацию
	> кеширование
	> работу с формами
	> абстракции для доступа к данным
	> ORM
	> Unit тестирование
	> Benchmarking
	> Работу с изображениями
	> Backup
	> и др.
*/

require_once 'core/route1.php';
//Route::start(); // запускаем маршрутизатор
