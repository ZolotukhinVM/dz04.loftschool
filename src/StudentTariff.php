<?php

class StudentTariff extends AbstractTariff
{
    use ServiceGps;

    const NAME_TARIFF = "Тариф студенческий";
    protected $costDistance = 4;
    protected $costTime = 1;

    public function getPrice()
    {
        if ($this->age > 25) {
            return "Error: age > 25";
        }
        $result = parent::getPrice();
        if ($this->serviceGps) {
            $result += $this->getTotalCostGps();
        }
        return $result;
    }
}
