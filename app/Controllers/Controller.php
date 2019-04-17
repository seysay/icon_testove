<?php

namespace App\Controllers;

use App\Model\Student;

class Controller
{
    //метод індекс
    /** Контроллер для шаблону main.html */
    public function index()
    {
        $student = new Student();
        $students = $student->getAll();

     require_once __DIR__ .'/../Views/main.html';


    }
    /** Контроллер для шаблону create.html */
    public function create()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student = new Student($_POST);
            $student->save();
            header("Location: /");
        }
        require_once __DIR__ . '/../Views/create.html';
    }

    /** Контроллер для шаблону edit.html */
    public function edit()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student = new Student($_POST);
            $student->save();
            header("Location: /");
        }

        $student = new Student();
        $student->load($_GET['id']);

        require_once __DIR__ . '/../Views/edit.html';

    }
     /**Контроллер для шаблону delete.html */
    public function delete()
    {
        $student = new Student();
        $student->load($_GET['id']);
        $student->delete();
        header("Location: /");
    }
}
