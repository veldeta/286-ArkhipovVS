<!DOCTYPE html>
<html>
<head>
<title>Змейка</title>
</head>
<body>
<?php
include 'VarDumper.php';
class snake{
	public $color = 'red';
	public $speed = '100';
	public $len = '-------------------------------';
	public $x = '>';
	public $y = '*';
	
	
	public function pop(){
		$z = str_split ($this->len);
		VarDumper::dump($z,10,true);
		$z[0] = $this->x;
		foreach($z as $keys->$arr){
			$keay++;
			}
		for($i=1;$i<count($z); $i++){
			
			
			echo implode($z);
			echo '<br>';
			 
			
			
			}
		
	}
} 
$snake = new Snake();
$snake->pop();




?>
</body>
</html>
