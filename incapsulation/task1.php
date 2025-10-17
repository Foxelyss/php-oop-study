<?php

class Cat
{
	private $name;
	private $color;
	public $weight;


	public function __construct(string $name, string $color)
	{
		$this->name = $name;
		$this->color  = $color;
	}

	public function sayHello()
	{
		echo 'Привет! Меня зовут ' . $this->name . '. Мой цвет: ' . $this->color . '. ';
	}

	public function setName(string $name)
	{
		$this->name = $name;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getColor()
	{
		return $this->color;
	}
}

$cat1 = new Cat('Снежок', 'Белый');
$cat2 = new Cat('Барсик', 'Рыжий');

$cat1->sayHello();
$cat2->sayHello();
