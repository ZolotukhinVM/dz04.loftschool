<?php

class StudentTariff extends AbstractTariff
{
    use ServiceGps;

    const NAME_TARIFF = "Тариф студенческий";
    protected $costDistance = 4;
    protected $costTime = 1;

    public function getRoundTime()
    {
        return $this->getTime();
    }

    public function getPrice()
    {
        if ($this->getAge() > 25) {
            return "Ошибка возраста";
        }
        return parent::getPrice();
    }
}
