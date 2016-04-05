<?php

interface CarService{
	public function getPrice();
}

class BasicInspection implements CarService
{
    public function getPrice()
    {
    	return 20;
    }
}

class OilChange implements CarService
{
	protected $carservice;

	function __construct(CarService $carservice) {
		$this->carservice = $carservice;
	}

    public function getPrice()
    {
    	return 30 + $this->carservice->getPrice();
    }
}

echo (new OilChange((new BasicInspection())))->getPrice();
