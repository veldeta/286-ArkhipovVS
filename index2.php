<?php
if($_FILES['file'] == true)
{ 
	 header("Location: http://gg/PhP/%d1%80%d0%b0%d0%b1%d0%be%d1%82%d0%b0%20%d1%81%20%d0%b1%d0%b0%d0%b7%d0%be%d0%b9%20%d0%b4%d0%b0%d0%bd%d0%bd%d1%8b%d1%85/%d0%a4%d0%be%d1%80%d0%bc%d0%b0.php");
}
include 'VarDumper.php';
class Form
{
	public $name;
	public $name1;
	public $password;
	public $age;
	public $file;
	public function SaveFile()
	{
		 $this->file; // здесь файл 
		 // логика сохранения файла  - см  move_uploaded_file();
		 move_uploaded_file($this->file["tmp_name"], 'работа с базой данных/'.$this->file["name"]); 
	}
	/*public function DeleteFile()
	{
		$this->file;
		if (unlink( 'files/'.$this->file["name"])){}
	}*/
}
$obj = new Form();
$obj->name = $_POST['name'];
VarDumper::dump($_FILES,10,true);
$obj->file = $_FILES['file'];
$obj->SaveFile();
//$obj->DeleteFile();
?>