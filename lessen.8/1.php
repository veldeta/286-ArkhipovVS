<?php
if(isset($_POST['name']))
{
	$name = $_POST['name'];
	$Surname = $_POST['Surname'];
	$group = $_POST['group'];
	
	$db_host = "localhost"; 
	$db_user = "root"; 
	$db_password = "";
	$db_base = 'world';
	$db_table = "students";
	
	$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
	
	if($mysqli->connect_errno)
	{
		printf("Не подключение к базе данных", $mysqli->connect_error);
	}
	$result = $mysqli->query("INSERT INTO ".$db_table."(name,`Surname`,`group`) VALUES ('".$name."','".$Surname."','".$group."')");
	if($result == true)
	{
		header("Location: 3.php");
	}
	else
	{
		echo 'Не работает';
	}
}	
include 'VarDumper.php';
class Anime
{
	public $name;
	public $Surname;
	public $group;
	public $dob;
	public $dab;
	public function MY()
	{
		$this->name = $this->name =($_POST['name']);
		$this->Surname = $this->Surname =($_POST['Surname']);
		$this->group = $this->group =($_POST['group']);
		$this->dob = $this->dob =($_POST['dob']);
		$this->dab = $this->dab =($_POST['dab']);
	}
}
class Surname extends Anime
{
	public $pup = 1;
	public function My ()
	{
		parent::MY();
	}
}
$obj = new Anime();
$obj->MY();
VarDumper::dump($obj,10,true);
echo '<br>';
$obj1 = new Surname();
$obj1->My();
VarDumper::dump($obj1,10,true);
?>