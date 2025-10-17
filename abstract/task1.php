<?php

abstract class HumanAbstract
{
	private $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function getName(): string
	{
		return $this->name;
	}

	abstract public function getGreetings(): string;
	abstract public function getMyNameIs(): string;

	public function introduceYourself(): string
	{
		return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
	}
}

class RussianHuman extends HumanAbstract
{
	public function getGreetings(): string
	{
		return "Приветствую";
	}

	public function getMyNameIs(): string
	{
		return "Меня зовут";
	}
}

class EnglishHuman extends HumanAbstract
{
	public function getGreetings(): string
	{
		return "Hello there";
	}

	public function getMyNameIs(): string
	{
		return "My name is";
	}
}

$russian = new RussianHuman('Иван');
echo $russian->introduceYourself();

echo '<br>';

$british = new EnglishHuman('Jacob');
echo $british->introduceYourself();
