<?php
include('db.php');

class Student 
{
    private $table = 'tbl_student';
    
    public function readAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        //own create method
        $stmt->execute();
        return $stmt->fetchAll();  
    }
}


?>