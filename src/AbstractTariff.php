<?php

abstract class AbstractTariff implements InterfacePriceCalculation
{
    protected $costDistance;
    protected $costTime;
    protected $distance;
    protected $time;
    protected $age;
    protected $serviceDriver;
    protected $serviceGps;

    public function __construct($distance, $time, $age, $serviceGps = false, $serviceDriver = false)
    {
        $this->distance = $distance;
        $this->time = $time;
        $this->age = $age;
        $this->serviceDriver = $serviceDriver;
        $this->serviceGps = $serviceGps;
    }

    abstract public function getRoundTime();

    protected function getAge()
    {
        return $this->age;
    }

    protected function getTime()
    {
        return $this->time;
    }


    protected function getCoefficient($age)
    {
        if ($age < 18 || $age > 65) {
            throw new Exception("Недопустимый возраст");
        }
        return ($age >= 18 && $age <= 21) ? 1.1 : 1;
    }

    public function getPrice()
    {
        try {
            $result = ($this->distance * $this->costDistance + $this->getRoundTime() * $this->costTime) * $this->getCoefficient($this->getAge());
            if ($this->serviceDriver) {
                $result += $this->costDriver;
            }
            if ($this->serviceGps) {
                $result += $this->getTotalCostGps();
            }
            return $result;
        } catch (Exception $e) {
            echo "Ошибка: " . $e->getMessage();
        }
    }
}
