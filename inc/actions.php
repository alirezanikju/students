<?php

require_once "class/student.class.php";
$student = new Student();


// get data for send to student class insert method
if (isset($_POST['addStudent'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $field = $_POST['field'];

    if ($student->addStusent($name, $age, $field)){
        echo "دانش آموز با موفقیت افزوده شد";
    }else{
        echo "افزودن کاربر با مشکل مواجه شد";
    }
}


// get student id with get method for send to student class delete method

if (isset($_GET['deleteStudent'])){
    $studentId = $_GET['deleteStudent'];

    if ($student->deleteStudent($studentId)){
        echo "دانش آموز با موفقیت حذف شد";
    }else{
        echo "مشکلی در حذف دانش آموز پیش آمد";
    }
}


// edit data

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $field = $_POST['field'];

    if($student->updateStudent($id,$name,$age,$field)){
        echo "اطلاعات جدید با موفقیت ذخیره شد";
    }else{
        echo "مشکلی در ثبت اطلاعات جدید پیش آمد";
    }
}





