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
    
    
//    insert Method
    
    public function insert()
    {
$sql = "INSERT INTO $this->table(name,department,age) VALUES(:name, :department, :age)"; 
    
    $stmt = DB::prepare($sql);
    
    $stmt->bindParam(':name',$this->name);
    $stmt->bindParam(':department',$this->department);
    $stmt->bindParam(':age',$this->age);
    return $stmt->execute();
    
    }
    
    
    //Catch the ID Method
    
    public function readById($id)
    {
       $sql = "SELECT * FROM $this->table WHERE id = :id";
       $stmt = DB::prepare($sql);
       $stmt->bindParam(':id', $id);
        //$this->id hobe na readById($id) je $id fataisi ota oibo
       $stmt->execute();
       return $stmt->fetch();
       //I select only one that's why use fetch()
    }
    
    
    //Select All the value method
    
    public function readAll()
    {
        $sql = "SELECT * FROM $this->table";    
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    
    //Update Method
    
    public function update($id)
    {
        $sql = "UPDATE $this->table SET name=:name, department=:department, age=:age WHERE id=:id";
        $stmt = DB::prepare($sql);
    
        $stmt->bindParam(':name',$this->name);
        $stmt->bindParam(':department',$this->department);
        $stmt->bindParam(':age',$this->age);
        $stmt->bindParam(':id',$id);
        return $stmt->execute();
    }
    
    
    //Delete Method
    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    
}

?>