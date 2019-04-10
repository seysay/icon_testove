<?php
namespace app\controllers;


class MainController
{
    //метод індекс
    public function index()
    {
        require_once '../app/views/main.html';


    }
    public function create()
    {
        require __DIR__ . '/../views/db.php';
        $message = '';
        if (isset ($_POST['name'])  && isset($_POST['surname']) && isset($_POST['age']) && isset($_POST['sex']) && isset($_POST['groupa']) && isset($_POST['faculty']) ) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $groupa = $_POST['groupa'];
            $faculty = $_POST['faculty'];
            $sql = 'INSERT INTO people(name, surname,age,sex,groupa,faculty) VALUES(:name, :surname,:age,:sex,:groupa,:faculty)';
            $statement = $connection->prepare($sql);
            if ($statement->execute([':name' => $name, ':surname' => $surname, ':age' => $age, ':sex' => $sex, ':groupa' => $groupa, ':faculty' => $faculty])) {
                $message = 'data inserted successfully';

            }
        }

        require __DIR__ . '/../views/create.html';

    }
    public function edit()
    {
        require __DIR__ . '/../views/db.php';
        $id = $_GET['id'];
        $sql = 'SELECT * FROM people WHERE id=:id';
        $statement = $connection->prepare($sql);
        $statement->execute([':id' => $id ]);
        $person = $statement->fetch(\PDO::FETCH_OBJ);
        if (isset ($_POST['name'])  && isset($_POST['surname']) && isset($_POST['age']) && isset($_POST['sex']) && isset($_POST['groupa']) && isset($_POST['faculty']) ) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $groupa = $_POST['groupa'];
            $faculty = $_POST['faculty'];
            $sql = 'UPDATE people SET name=:name, surname=:surname, age=:age, sex=:sex, groupa=:groupa, faculty=:faculty WHERE id=:id';
            $statement = $connection->prepare($sql);
            if ($statement->execute([':name' => $name, ':surname' => $surname, ':age' => $age, ':sex' => $sex, ':groupa' => $groupa, ':faculty' => $faculty])) {
                header("Location: /");
            }
        }
        require __DIR__ . '/../views/edit.html';

    }
    public function delete()
    {

        require __DIR__ . '/../views/db.php';
        $id = $_GET['id'];
        $sql = 'DELETE FROM people WHERE id=:id';
        $statement = $connection->prepare($sql);
        if ($statement->execute([':id' => $id])) {
            header("Location: /");
        }
    }

}
