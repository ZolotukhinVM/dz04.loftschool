<?php

abstract class AbstractTariff implements InterfacePriceCalculation
{
    const COEFFICIENT = 1;
    const HIGHER_COEFFICIENT = 1.1;
    protected $costDistance;
    protected $costTime;
    protected $distance;
    protected $time;
    protected $userTime;
    protected $age;
    protected $serviceDriver;
    protected $serviceGps;

    public function __construct($distance, $time, $age, $serviceGps, $serviceDriver)
    {
//        if ($this->age < 18 || $this->age > 65) {
//            throw new Exception("Недопустимый возраст");
//        }
        $this->distance = $distance;
        $this->time = $time;
        $this->age = $age;
        $this->serviceDriver = $serviceDriver;
        $this->serviceGps = $serviceGps;
    }

    public function getCoefficient()
    {
        return ($this->age >= 18 && $this->age <= 21) ? self::HIGHER_COEFFICIENT : self::COEFFICIENT;
    }

    public function getPrice()
    {
        return ($this->distance * $this->costDistance + $this->time * $this->costTime) * $this->getCoefficient();
    }
}
