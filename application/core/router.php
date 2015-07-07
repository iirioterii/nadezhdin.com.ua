<?php
use Routing\Router;
use Routing\MatchedRoute;
use Routing\RouterTrait;

try {
    $router = new Router(RouterTrait::GET_HTTP_HOST());

    //Admin
    $router->add('index', '/', 'controller_main:action_index', 'GET|POST');
    $router->add('admin', '/admin', 'controller_admin:action_index', 'GET|POST');
    $router->add('adminLogin', '/admin/login', 'controller_admin:action_login', 'GET|POST');
    $router->add('adminLogout', '/admin/logout', 'controller_admin:action_logout', 'GET|POST');
    $router->add('adminAdd', '/admin/add', 'controller_admin:action_add', 'POST');
    $router->add('adminDel', '/admin/del/(id:num)', 'controller_admin:action_del', 'GET');
    $router->add('edit', '/edit/(id:num)', 'controller_edit:action_index', 'GET|POST');
    $router->add('update', '/edit/update', 'controller_edit:action_update', 'GET|POST');
    $router->add('news', '/news/(slug:str)', 'controller_main:action_news', 'GET|POST');
    $router->add('about', '/about', 'controller_about:action_index');
    $router->add('notFound', '/404', 'controller_404:action_index');
    $router->add('contact', '/contact', 'controller_contact:action_index');
    $router->add('training', '/training', 'controller_training:action_index');
    $router->add('gallery', '/gallery', 'controller_gallery:action_index');
    
//    $router->add('edit', '/edit/update', 'controller_edit:action_update', 'GET|POST');
//    $router->add('edit', '/edit', 'controller_edit:action_index', 'GET|POST');
//    $router->add('main', '/main/(slug:str)','controller_main:action_news', 'GET|POST');
   

    //Main
    //$router->add('homepage', '/', 'Controller_Main:action_index', 'GET|POST');
    //$router->add('error404', '/404', 'Controller_Main:action_error404' , 'GET|POST');
    //$router->add('staticPage', '/(slug:str).html', 'Controller_Main:action_staticPage' , 'GET|POST');

    //News
//    $router->add('news', '/news', 'Controller_News:action_index', 'GET|POST');
//    $router->add('article', '/article/(slug:str)', 'Controller_News:action_article' , 'GET|POST');
//    $router->add('edit_news', '/edit/(id:num)', 'Controller_News:action_edit' , 'GET|POST');
//    
//    //Admin
//    $router->add('adminMain', '/admin', 'Controller_Admin:action_index' , 'GET|POST');
//    $router->add('adminLogin', '/admin/login', 'Controller_Admin:action_login');
//    $router->add('adminLogout', '/admin/logout', 'Controller_Admin:action_logout');
//    $router->add('adminNews', '/admin/news', 'Controller_Admin:action_news' , 'GET|POST');
//    $router->add('adminArticle', '/admin/article/id(id:num)', 'Controller_Admin:action_article' , 'GET|POST');
//    $router->add('adminPages', '/admin/pages', 'Controller_Admin:action_pages' , 'GET|POST');
//    $router->add('adminOnePage', '/admin/page/id(id:num)', 'Controller_Admin:action_onepage' , 'GET|POST');
    

    $route = $router->match(RouterTrait::GET_METHOD(), RouterTrait::GET_PATH_INFO());

    if (null == $route) {
        $route = new MatchedRoute('controller_404:action_index');
    }

    list($class, $action) = explode(':', $route->getController(), 2);

    call_user_func_array(array(new $class($router), $action), $route->getParameters());

} catch (Exception $e) {

    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

    echo $e->getMessage();
    echo $e->getTraceAsString();
    exit;
}
