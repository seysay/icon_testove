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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student = new Student($_POST);
            $student->save();
            // Redirect
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student = new Student($_POST);
            $student->save();
            // Redirect
        }

        $student = new Student();
        $student->load($_GET['id']);

        require_once __DIR__ . '/../Views/edit.html';

    }
    public function delete()
    {
        $id = $_GET['id'];
    }
}
