<?php

//include('DB.php');

include('Main.php');

//don't need to include DB.php main class ke amra extend kore felchi tai
// r lagbe na database include kora

class Teacher extends Main
{
    protected $table = 'tbl_teacher';
    
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
    
     //Select All the value method
 
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
    
    /*Using this all comment massege in Main.php file*/
   
}

?>