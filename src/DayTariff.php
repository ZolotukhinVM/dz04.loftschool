<?php

class DayTariff extends AbstractTariff
{
    use ServiceDriver, ServiceGps;

    const NAME_TARIFF = "Тариф суточный";
    protected $costDistance = 1;
    protected $costTime = 1000;

    public function getRoundTime()
    {
        $min = 0;
        $day = (ceil($this->getTime() / 1440));
        if ($day >= 2) {
            $min = $this->getTime() - ($day - 1) * 1440;
        }
        return ($min < 30) ? --$day : $day;
    }
}
