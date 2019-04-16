<?php

namespace App\Model;

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
    private $groupa;

    /**
     * @var string
     */
    private $faculty;

    /**
     * Student constructor.
     * @param $data
     * @param $pdo
     */
    public function __construct($data = [])
    {
        $this->id = isset($data['id']) ? $data['id'] : '';
        $this->name = isset ($data['name']) ? $data['name'] : '';
        $this->surname = isset ($data['surname']) ? $data['surname'] : '';
        $this->age =  isset ($data['age']) ? $data['age'] : '';
        $this->sex = isset ($data['sex']) ? $data['sex'] : '';
        $this->groupa = isset ($data['groupa']) ? $data['groupa'] : '';
        $this->faculty = isset ($data['faculty']) ? $data['faculty'] : '';

        $dsn = 'mysql:host=localhost;dbname=students';
        $username = 'root';
        $password = '123';
        $options = [];
        //try {
        $connection = new \PDO($dsn, $username, $password, $options);

        $this->pdo = $connection;
    }

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
            if ($this->id) {
                $sql = 'INSERT INTO people(name,surname,age,sex,groupa,faculty)
              VALUES(:name, :surname,:age,:sex,:groupa,:faculty)';
                $statement = $this->pdo->prepare($sql);
                if ($statement->execute([
                    ':name' => $this->name,
                    ':surname' => $this->surname,
                    ':age' => $this->age,
                    ':sex' => $this->sex,
                    ':groupa' => $this->groupa,
                    ':faculty' => $this->faculty])) {
                }
            } else {
                $sql = 'UPDATE people SET name=:name, surname=:surname, age=:age, sex=:sex,
              groupa=:groupa, faculty=:faculty 
              WHERE id=:id';
                $statement = $this->pdo->prepare($sql);
                if ($statement->execute([
                    ':name' => $this->name,
                    ':surname' => $this->surname,
                    ':age' => $this->age,
                    ':sex' => $this->sex,
                    ':groupa' => $this->groupa,
                    ':faculty' => $this->faculty,
                    ':id' => $this->id])) {

                }
            }
        }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $sql = 'DELETE FROM people WHERE id=:id';
        $statement = $this->pdo->prepare($sql);

        if ($statement->execute([
            ':id' => $this->id])) {

            header("Location: /");
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
    public function getGroupa()
    {
        return $this->groupa;
    }

    /**
     * @param mixed $groupa
     * @return Student
     */
    public function setGroupa($groupa)
    {
        $this->groupa = $groupa;
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
