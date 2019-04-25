<?php

namespace App\Model;

use  App\Core\Config;

/**
 * Class Student
 * @package App\Model
 */
class Student
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var integer
     */
    private $age;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var string
     */
    private $group;

    /**
     * @var string
     */
    private $faculty;

    public $pdo;

    /**
     * Student constructor.
     * @param $data
     */
    public function __construct($data = [])
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->name = isset ($data['name']) ? $data['name'] : '';
        $this->surname = isset ($data['surname']) ? $data['surname'] : '';
        $this->age =  isset ($data['age']) ? $data['age'] : '';
        $this->sex = isset ($data['sex']) ? $data['sex'] : '';
        $this->group = isset ($data['group']) ? $data['group'] : '';
        $this->faculty = isset ($data['faculty']) ? $data['faculty'] : '';
        $this->pdo = (new Config())->getPdo();
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

        $student = new Student();
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
        $config = new Student();
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

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Student
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Student
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     * @return Student
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     * @return Student
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     * @return Student
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param mixed $group
     * @return Student
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * @param mixed $faculty
     * @return Student
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;
        return $this;
    }

    /**
     * @param $data
     */
    public function setData($data): void
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }
}
