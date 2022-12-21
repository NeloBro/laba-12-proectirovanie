<?php 

class Animal 
{
	public $food;
	public $location;

	function __construct($food,$location) {
		$this->food = $food;
		$this->location = $location;
	}

	function makeNoise() {
		echo "Какое-то животное делает звук";
	}

	function eat() {
		echo "Какое-то животное ест";
	}

	function sleep() {
		echo "Какое-то животное спит";
	}
}

class Cat extends Animal 
{
	public $length;

	function __construct($food,$location,$length) {
		parent::__construct($food,$location);
		$this->length = $length;
	}

	function makeNoise() {
		echo "Кот мяукает";
	}

	function eat() {
		echo "Кот ест ".$this->food;
	}

	function sleep() {
		echo "Кот спит ".$this->location;
	}
}

class Dog extends Animal 
{
	public $weight;

	function __construct($food,$location,$weight) {
		parent::__construct($food,$location);
		$this->weight = $weght;
	}

	function makeNoise() {
		echo "Пёс гавкает";
	}

	function eat() {
		echo "Пёс ест ".$this->food;
	}

	function sleep() {
		echo "Пёс спит ".$this->location;
	}
}

class Horse extends Animal 
{
	public $speed;

	function __construct($food,$location,$speed) {
		parent::__construct($food,$location);
		$this->speed = $speed;
	}

	function makeNoise() {
		echo "Конь ржёт";
	}

	function eat() {
		echo "Конь ест ".$this->food;
	}

	function sleep() {
		echo "Конь спит ".$this->location;
	}
}

if($_POST['animal']=='cat') {
	$cat = new Cat($_POST['food'],$_POST['location'],$_POST['length']);
	if($_POST['act']=='sound') {
		$cat->makeNoise();
	} elseif($_POST['act']=='eat') {
		$cat->eat();
	} elseif ($_POST['act']=='sleep') {
		$cat->sleep();
	}
	if(!$_POST['length'] == "") {
		echo "<br> Длина кота составляет ".$cat->length;
	}
} elseif($_POST['animal']=='dog') {
	$dog = new Dog($_POST['food'],$_POST['location'],$_POST['weight']);
	if($_POST['act']=='sound') {
		$dog->makeNoise();
	} elseif($_POST['act']=='eat') {
		$dog->eat();
	} elseif ($_POST['act']=='sleep') {
		$dog->sleep();
	}
	if(!$_POST['weight'] == "") {
		echo "<br> Вес пса составляет ".$dog->weight;
	}
} elseif($_POST['animal']=='horse') {
	$horse = new Horse($_POST['food'],$_POST['location'],$_POST['speed']);
	if($_POST['act']=='sound') {
		$horse->makeNoise();
	} elseif($_POST['act']=='eat') {
		$horse->eat();
	} elseif ($_POST['act']=='sleep') {
		$horse->sleep();
	}
	if(!$_POST['speed'] == "") {
		echo "<br> Скорость коня составляет ".$horse->speed;
	}
}

?>