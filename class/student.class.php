<?php

require_once "class/db.class.php";

class Student
{
    private $con;

    public function __construct()
    {
        $this->con = new Db();
        $this->con->getCon();
    }


//    insert new studet data in database

    public function addStusent($name = null, $age = null, $filed = null)
    {
        try {
            $sql = "INSERT INTO students(name, age, field) VALUES (:name, :age, :field)";
            $result = $this->con->prepare($sql);
            $result->bindValue(":name", $name);
            $result->bindValue(":age", $age);
            $result->bindValue(":field", $filed);
            if ($result->execute()) {
                return true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function getStudent()
    {
        $query = "SELECT * FROM students";
        try {
            $result = $this->con->query($query);
            $students = $result->fetchAll(PDO::FETCH_ASSOC);
            return $students;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function deleteStudent($id){
        try {
            $query = "DELETE FROM students WHERE id=:id";
            $result = $this->con->prepare($query);
            $result->bindValue(":id", $id);
            $result->execute();
            return true;
        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }


    public function updateStudent($id,$name,$age,$filed){
        try {
            $sql = "UPDATE students SET name=:name,age=:age,field=:field WHERE id=:id";
            $result = $this->con->prepare($sql);
            $result->bindValue(":id", $id);
            $result->bindValue(":name", $name);
            $result->bindValue(":name", $name);
            $result->bindValue(":age", $age);
            $result->bindValue(":field", $filed);
            if ($result->execute()) {
                return true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}

