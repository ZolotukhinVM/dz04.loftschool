<?php

namespace ZolotukhinVM;

abstract class AbstractTariff implements InterfacePriceCalculation
{
    use ServiceDriver, ServiceGps;

    protected $coefficient = 1;
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
        if ($age >= 18 && $age <= 21) {
            $this->coefficient = 1.1;
        }
    }

    public function getPrice()
    {
        $result = ($this->distance * $this->costDistance + $this->time * $this->costTime) * $this->coefficient;
        if ($this->serviceGps) {
            $result += $this->getTotalCostGps();
        }
        if ($this->serviceDriver) {
            $result += $this->costDriver;
        }
        return $result;
    }
}
