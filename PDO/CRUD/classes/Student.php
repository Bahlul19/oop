<?php
/*
include('DB.php');

class Student
{
    private $table = 'tbl_student';
    public function readAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
}
*/


include('DB.php');

class Student
{
    private $table = 'tbl_student';
    
    private $name;
    private $department;
    private $age;
    
    //Let's make a setter for insert a value in database
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setDepartment($department)
    {
        $this->department = $department;
    }
    
    public function setAge($age)
    {
        $this->age = $age;
    }
    
    public function insert()
    {
$sql = "INSERT INTO $this->table(name,department,age) VALUES(:name, :department, :age)"; 
    
    $stmt = DB::prepare($sql);
    
    $stmt->bindParam(':name',$this->name);
    $stmt->bindParam(':department',$this->department);
    $stmt->bindParam(':age',$this->age);
    return $stmt->execute();
    
    }
    
    public function readAll()
    {
        $sql = "SELECT * FROM $this->table";    
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>