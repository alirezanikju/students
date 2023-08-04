<?php

require_once "class/student.class.php";

if (isset($_POST['addStudent'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $field = $_POST['field'];

    $student = new Student();
    if ($student->addStusent($name, $age, $field)){
        echo "دانش آموز با موفقیت افزوده شد";
    }else{
        echo "افزودن کاربر با مشکل مواجه شد";
    }
}
