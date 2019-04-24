<?php

namespace App\Core;

use App\Model\Student;

class Config{

    public function __construct($data = []){
    $dsn = 'mysql:host=localhost;dbname=students';
    $username = 'root';
    $password = '123';
    $options = [];

    $connection = new \PDO($dsn, $username, $password, $options);

    $this->pdo = $connection;
    }

/**
 * @param $id
 * @return $this
 */
    public function load($id)
    {
        $sql = 'SELECT * FROM people WHERE id=?';
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $id);

        $statement->execute();
        $data = $statement->fetch(\PDO::FETCH_ASSOC);

        $this->setData($data);

        return $this;
    }

    /**
     * return Student|Array
     */
    public function getAll()
    {
        $studentsCollection = [];

        $sql = 'SELECT * FROM people';
        $config = new Config();
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $studentsData = $statement->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($studentsData as $data) {
            $student = new Student();
            $student->setData($data);

            $studentsCollection[] = $student;
        }

        return $studentsCollection;
    }

    public function save()
    {
        if (is_null($this->id)) {
            $sql = 'INSERT INTO people(name,surname,age,sex,`group`,faculty)
                    VALUES(:name, :surname, :age, :sex, :group, :faculty)';

            $statement = $this->pdo->prepare($sql);

            $statement->execute([
                ':name' => $this->name,
                ':surname' => $this->surname,
                ':age' => $this->age,
                ':sex' => $this->sex,
                ':group' => $this->group,
                ':faculty' => $this->faculty]);

        } else {
            $sql = 'UPDATE people SET name=:name, surname=:surname, age=:age, sex=:sex,
                    `group`=:group, faculty=:faculty 
                    WHERE id=:id';

            $statement = $this->pdo->prepare($sql);

            $statement->execute([
                ':name' => $this->name,
                ':surname' => $this->surname,
                ':age' => $this->age,
                ':sex' => $this->sex,
                ':group' => $this->group,
                ':faculty' => $this->faculty,
                ':id' => $this->id
            ]);
        }
    }

    /**
     * @param $id
     */
    public function delete()
    {
        $sql = 'DELETE FROM people WHERE id=:id';
        $statement = $this->pdo->prepare($sql);

        if ($statement->execute([
            ':id' => $this->id])) {

        }
    }
}
