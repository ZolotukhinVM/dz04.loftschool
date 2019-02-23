<?php

class HourTariff extends AbstractTariff
{
    use ServiceDriver, ServiceGps;

    public function __construct($distance, $time, $age, $serviceGps, $serviceDriver)
    {
        parent::__construct($distance, $time, $age, $serviceGps, $serviceDriver);
        $this->time = ceil($time / 60);
        $this->userTime = $time;
    }

    const NAME_TARIFF = "Тариф почасовой";
    protected $costDistance = 0;
    protected $costTime = 200;

    public function getPrice()
    {
        $result = parent::getPrice();
        if ($this->serviceGps) {
            $result += $this->getTotalCostGps();
        }
        if ($this->serviceDriver) {
            $result += $this->costDriver;
        }
        return $result;
    }
}
