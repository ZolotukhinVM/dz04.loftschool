<?php

namespace ZolotukhinVM;

class BaseTariff extends AbstractTariff
{
    const NAME_TARIFF = "Тариф базовый";
    protected $costDistance = 10;
    protected $costTime = 3;

    public function getPrice()
    {
        if ($this->serviceDriver) {
            $result = "Error: driver is not available in this tariff!";
        } else {
            $result = parent::getPrice();
        }
        return $result;
    }
}
