<?php

class Student {
    public $name;
    public $course;

    public function setName($name) {
        $this->name = $name;
    }
    public function setCourse($course) {
        if($this->isCourseCorrect($course)) {
            $this->course = $course;
        } else {
            echo 'Такого курса нет';
        }
    }

    public function transferToNextCourse() {
        if ($this->isCourseCorrect($this->course)) {
            $this->course++;
        }
    }

    private function isCourseCorrect($course) {
        return $course > 1 && $course <= 5;
    }
}

$student = new Student();
$student->setName('John');
$student->setCourse(3);
$student->transferToNextCourse();
$student->transferToNextCourse();
echo $student->course;