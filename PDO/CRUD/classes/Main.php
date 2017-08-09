<?php
include('DB.php');
abstract class Main
{
    //Main class korar shubida oilo jeta bar bar lage egulare amra alada korilaimu 
    //like readAll(),readById() and Delete method bar bar lager na otar lagy ono rakhi dilam
    
    protected $table;
   
    //jehutu ei method gula bar bar lagbe
    abstract  public function insert();
    abstract  public function update($id);

    
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
