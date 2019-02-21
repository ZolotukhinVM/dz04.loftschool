<?php

class BaseTariff extends AbstractTariff
{
    use ServiceGps;

    const NAME_TARIFF = "Тариф базовый";
    protected $costDistance = 10;
    protected $costTime = 3;

    public function getRoundTime()
    {
        return $this->getTime();
    }
}
