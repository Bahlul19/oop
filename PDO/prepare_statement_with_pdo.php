<?php

//Prepare statement with PDO

$dsn = "mysql:dbname=userdata;host:localhost";

$user = "root";

$password = "";


try
{
    $pdo = new PDO($dsn,$user,$password);
} catch (PDOException $ex) {
    echo "Connection Failed".$ex->getMessage();
}

$name = "Tanzim";

$email = "tanzim@gmail.com";

$skill = "css";

$age = 22;


//$sql = "insert into tbl_user(name,email,skill,age)values(:name,:email,:skill,:age)";

//$stmt = $pdo->prepare($sql);

//placeholder assign here
//$stmt->bindParam(':name',$name /*PDO::PARAM_STR*/);//PDO::PARAM_STR = data type
//$stmt->bindParam(':email',$email/*PDO::PARAM_STR*/);// || egula by default thakke
//$stmt->bindParam(':skill',$skill /*PDO::PARAM_STR*/);
//$stmt->bindParam(':age',$age /*PDO::PARAM_INT*/);

//$stmt->execute();



//ANOTHER FORM OF INSERTING DATA

$sql ="INSERT INTO tbl_user(name,email,skill,age) values(?,?,?,?)";

$stmt = $pdo->prepare($sql);

$array = array($name,$email,$skill,$age);

$stmt->execute($array);





























//must execute this


//bindParam er modde data-type onushare bound kora hoy


?>