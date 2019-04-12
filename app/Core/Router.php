<?php
    namespace App\Core;

    class Router
    {
        public function start()
        {
          $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

         $routing = [
             // путь /, є конкретний контролер мейн, і метод екшин буде виконувати індекс
             "/"=> ['controller' =>"", 'action' =>'index'],
             "/create.html"=> ['controller' =>"", 'action' =>'create'],
             "/edit.html"=> ['controller' =>"", 'action' =>'edit'],
             "/delete.php"=> ['controller' =>"", 'action' =>'delete']
         ];

         if (isset($routing[$route])) {
             $controller = 'app\\Controllers\\' . $routing[$route]['controller'] . 'Controller';
             //створення екземпляр класу
             $controller_obj = new $controller();
             $controller_obj->{$routing[$route]['action']}();
         } else {
             //echo 'Немає такого шляху';
         }
        }
    }
