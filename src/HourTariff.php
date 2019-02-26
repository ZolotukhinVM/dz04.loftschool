<?php

namespace ZolotukhinVM;

class HourTariff extends AbstractTariff
{
    public function __construct($distance, $time, $age, $serviceGps, $serviceDriver)
    {
        parent::__construct($distance, $time, $age, $serviceGps, $serviceDriver);
        $this->time = ceil($time / 60);
        $this->userTime = $time;
    }

    const NAME_TARIFF = "Тариф почасовой";
    protected $costDistance = 0;
    protected $costTime = 200;
}
