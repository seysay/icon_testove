<?php

namespace App\Core;
/** Налаштування роутера, щоб працювали запити: index,create,edit,delete */
class Router
{
    /**
     * @throws \Exception
     */
    public function start()
    {
        $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $routing = [
            /** шлях /, є конкретний контролер main, і метод action буде виконувати index*/
            "/"=> ['controller' =>"", 'action' =>'index'],
            "/create.html"=> ['controller' =>"", 'action' =>'create'],
            "/edit.html"=> ['controller' =>"", 'action' =>'edit'],
            "/delete.html"=> ['controller' =>"", 'action' =>'delete']
        ];
        /** Робимо перевірку масиву*/
        if (isset($routing[$route])) {
            $controller = 'App\\Controllers\\' . $routing[$route]['controller'] . 'Controller';
            //створення екземпляр класу
            $controllerInstance = new $controller();
            $controllerInstance->{$routing[$route]['action']}();
        } else {
           throw new \Exception("Помилка");
        }
    }
}
