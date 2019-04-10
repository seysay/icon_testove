<?php
    namespace liw\core;

    class Router
    {
        public function start()
        {
          $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

         $routing = [
             // путь /, є конкретний контролер мейн, і метод екшин буде виконувати індекс
             "/"=> ['controller' =>"Main", 'action' =>'index'],
             "/edit"=> ['controller' =>"Main", 'action' =>'edit'],
             "/delete"=> ['controller' =>"Main", 'action' =>'delete']
         ];

         if (isset($routing[$route])) {
             $controller = 'app\\controllers\\' . $routing[$route]['controller'] . 'Controller';
             //створення екземпляр класу
             $controller_obj = new $controller();
             $controller_obj->{$routing[$route]['action']}();
         } else {
             //echo 'Немає такого шляху';
         }
        }
    }
