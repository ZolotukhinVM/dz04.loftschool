<?php

namespace ZolotukhinVM;

class StudentTariff extends AbstractTariff
{
    const NAME_TARIFF = "Тариф студенческий";
    protected $costDistance = 4;
    protected $costTime = 1;

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
