<?php
	// 			Лекція №1 Завдання
	// 		Php syntax

	// Variables, strings
	$myNumber1 = 5;
	$myNumber2 = 4.5;
	$theString = "Hello";
	echo var_dump($myNumber1);
	echo "<br>";
	echo var_dump($myNumber2);
	echo "<br>";
	echo var_dump($theString);
	echo "<br>";
	echo "The result between integer and float (double):  " . $myNumber1 + $myNumber2;
	
	// Concatenation
	echo "<br>";
	echo "<br>";
	$theString2 = '123';
	echo $theString . $theString2;
	echo "<br>";
	echo $myNumber2 . $theString2;

	// Denomination of variables (Розіменування змінних)
	echo "<br>";
	echo "<br>";
	$usualVarStr = "Hello world!";
	$varForDenom = "usualVarStr";
	echo "This is value of var: " . $varForDenom . "<br>This is denomination of this value: " . $$varForDenom;

	// Comparison (Порівняння)
	echo "<br>";
	echo "<br>";
	$x1 = 4;
	$x2 = 5;
	$x3 = 4.0;

	echo '$x1= ' . $x1. '; $x2= ' . $x2 . '; $x3= '. $x3;
	echo "<br>";
	if ($x1 == $x3) {
		echo '$x1 == $x3';
	}else {
		echo '$x1 != $x3';
	}

	// Casting types (Приведення типів)
	echo "<br>";
	echo "<br>";
	echo '123' + 3;// еще примеры!

	// Foreach
	echo "<br>";
	echo "<br>";
	$array1 = array(24, 12, 56, 9);
	echo "Used loop for: ";
	for ($i=0; $i < count($array1); $i++) { 
		$temp1 = $i+1;
		echo "<br>   $temp1 value = " . $array1[$i];
	}

	echo "<br>";
	echo "Used loop foreach: ";
	foreach ($array1 as $elem) { 
		echo "<br>  " . $elem;
	}

	// Hash array
	echo "<br>";
	echo "<br>";
	$array2 = array(
		"name" => "John", 
		"surname" => "Rodriguez", 
		"age" => "34", 
		"height" => "");
	echo "Used loop foreach (hasharray): ";
	foreach ($array1 as $key => $value) { 
		echo "<br>&nbsp;&nbsp;&nbsp;" . $elem;
	}

	// Explode
	echo "<br>";
	echo "<br>";
	$explodeStr = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
	$words = explode(" ", $explodeStr);
	foreach ($words as $oneWord) { 
		echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $oneWord;
	}

	// Implode
	echo "<br>";
	echo "<br>";
	$implodeArr = array(1, 2, 3);
	echo implode("&nbsp;&nbsp;&nbsp;&nbsp;", $implodeArr);


	// 		OOP

	// Class, object and constructor
	echo "<br>";
	class Person {
		private $age;
		private $fullName;

		function __construct($age, $fullName){
			$this->age = $age;
			$this->fullName = $fullName;
		}

		function __destruct(){
			echo "<br>Destructor (Person) was called<br>";
		}
		public function getInfo(){
			return "<br>&nbsp;&nbsp;Age: ". $this->age 
			. "<br>&nbsp;&nbsp;Full name: " . $this->fullName;
		}
	}
	$onePerson = new Person(44, "Henry Day");
	echo "<br>";
	echo $onePerson->getInfo();
	

	// Descendant of the class (Нащадок класу) and Parental constructor (Батьківский конструктор)
	echo "<br>";
	class Programmer extends Person{
		private $experience;

		function __construct($age, $fullName, $experience){
			parent::__construct($age, $fullName);
			$this->experience = $experience;
		}
		function __destruct(){
			echo "<br>Destructor (Programmer) was called<br>";
		}

		public function getInfo(){
			return parent::getInfo($this->age, $this->fullName) 
			. "<br>&nbsp;&nbsp;Experience: ". $this->experience;
		}
	}

	$oneProgrammer = new Programmer(44, "Henry Day", 8);
	echo $oneProgrammer -> getInfo();


	// Singleton pattern
	echo "<br>";
	echo "<br>";
    echo "hui";
	class MyDatabase{
		private static $mainInstance = null;
		private function __construct(){}

		public static function getInstance(){
			if (null === self::$mainInstance){
				self::$mainInstance = new self();
			}
			return self::$mainInstance;
		}

		public function ownfunC(){
			return "ownFunc returned string";
		}
	}
    echo var_dump(MyDatabase::getInstance());
	echo (MyDatabase::getInstance())->ownfunC();
?>