<?php
    namespace App\Core;

    class Loader
    {
        public function loadClass($class) /*app\Room*/
        {
            $arr = explode('\\',$class);
            $prefix = array_shift($arr);
                //якщо префікс апп то загружає апп
            if ($prefix == 'app'){
                $prefix_file = '../app/';
                //якщо префікс лів то загружає лів
            }elseif($prefix == 'liw'){
                //початок маршруту
                $prefix_file = '../vendor/liw/';
            }
            //формуємо повну назву з файла
           $file = $prefix_file . implode('/', $arr) . '.php';
            if(is_file($file)){
                require_once $file;
            }
        }
    }
