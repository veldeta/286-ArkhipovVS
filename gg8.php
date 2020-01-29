<?php
include 'VarDumper.php';
class Lion{
	public $paw = 4;
	public $eye = 2;
	public $tail = 1;
	public $HP = 100;
	public $hunger = 50;
	public $sleep = 20;
	public $some;
	
	public function go(){
		$this->hunger--;
		$this->sleep--;
	}

	public function jump(){
		$this->hunger = $this->hunger-3;
	}
	public function sleep(){
		$this->hunger--;
		$this->sleep = $this->sleep+4;
	}
	public function fight(){
		$str = '123456789';
		$att = substr(str_shuffle($str),0,1);
		if($att >= 7){
			 
			$this->eye--;
			$this->HP = $this->HP-11;
		}
		else{
			$this->HP = $this->HP-11;
		}
	}
	public function say($text){
		echo 'Лев рычит,'.' '.$text;
	}
	
}

$lion = new Lion();
VarDumper::dump($lion,10,true);
$lion->go();
VarDumper::dump($lion,10,true);
$lion->go();
VarDumper::dump($lion,10,true);
$lion->jump();
VarDumper::dump($lion,10,true);
$lion->fight();
VarDumper::dump($lion,10,true);
$lion->say('арррррррр, смэрт тебе'); 
VarDumper::dump($lion,10,true);

	




?>