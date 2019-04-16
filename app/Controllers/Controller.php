<?php

namespace App\Controllers;

use App\Model\Student;

class Controller
{
    //метод індекс
    public function index()
    {
        $student = new Student();
        $students = $student->getAll();

     require_once __DIR__ .'/../Views/main.html';


    }
    public function create()
    {
        //TODO: Не створює нових користувачів

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student = new Student($_POST);
            $student->save();
            header("Location: /");
        }
        require_once __DIR__ . '/../Views/create.html';
    }

    public function edit()
    {
        //TODO: Не зберігає нових користувачів

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student = new Student($_POST);
            $student->save();
            header("Location: /");
        }

        $student = new Student();
        $student->load($_GET['id']);

        require_once __DIR__ . '/../Views/edit.html';

    }
    public function delete()
    {
        $student = new Student();
        $student->load($_GET['id']);
        $student->delete();
        header("Location: /");
    }
}
