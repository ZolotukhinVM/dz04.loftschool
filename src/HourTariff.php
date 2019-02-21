<?php

class HourTariff extends AbstractTariff
{
    use ServiceDriver, ServiceGps;

    const NAME_TARIFF = "Тариф почасовой";
    protected $costDistance = 0;
    protected $costTime = 200;

    public function getRoundTime()
    {
        return (ceil($this->getTime() / 60));
    }
}
