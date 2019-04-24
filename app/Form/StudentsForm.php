<?php

namespace App\Form;

use App\Model\Student;

use App\Controllers\Controller;

class StudentsForm
{
    /**
     * @param array $data
     * @return bool
     */
    public function validate(array $data)
    {
        if (!empty(trim(strip_tags($data['name']))) &&
            !empty(trim(strip_tags($data['surname']))) &&
            !empty(trim(strip_tags($data ['age']))) &&
            !empty(trim(strip_tags($data['sex']))) &&
            !empty(trim(strip_tags($data['group']))) &&
            !empty(trim(strip_tags($data['faculty'])))) {
            return true;
        } else {
            return false;
        }
    }
}
