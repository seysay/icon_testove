<?php
namespace app\controllers;


class MainController
{
    //метод індекс
    public function index()
    {
        require_once '../app/views/main.php';


    }
    public function edit()
    {
        $header = "EDIT";
        require_once '../app/views/main.php';

    }
    public function delete()
    {

        print_r('Видалення студента з Бази даних');
    }

}