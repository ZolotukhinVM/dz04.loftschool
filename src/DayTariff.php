<?php

namespace ZolotukhinVM;

class DayTariff extends AbstractTariff
{
    protected $min = 0;
    protected $day;

    public function __construct($distance, $time, $age, $serviceGps, $serviceDriver)
    {
        parent::__construct($distance, $time, $age, $serviceGps, $serviceDriver);
        $this->day = (ceil($time / 1440)) . "<br>";
        if ($this->day >= 2) {
            $this->min = $time - ($this->day - 1) * 1440;
        }
        $this->time = ($this->min < 30) ? --$this->day : $this->day;
        $this->userTime = $time;
    }

    const NAME_TARIFF = "Тариф суточный";
    protected $costDistance = 1;
    protected $costTime = 1000;
}
