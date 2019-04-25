<?php

namespace App\Controllers;

use App\Model\Student;

use App\Form\StudentsForm;

class Controller
{

    public function index()
    {
        $student = new Student();
        $students = $student->getAll();

        require_once __DIR__ .'/../Views/main.html';
    }

    public function create()
    {
        $form = new StudentsForm();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($form->validate($_POST)) {
                $student = new Student($_POST);
                $student->save();
                header("Location: /");
            }
        }
        require_once __DIR__ . '/../Views/create.html';
    }

    public function edit()
    {
        $form = new StudentsForm();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($form->validate($_POST)){
                $student = new Student($_POST);
                $student->save();

                header("Location: /");
            }
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
