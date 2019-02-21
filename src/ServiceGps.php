<?php

trait ServiceGps
{
    protected $costGps = 15;

    public function getTotalCostGps()
    {
        if ($this->getTime() < 60) {
            throw new Exception("Услуга доступна минимум 1 час");
        }
        return ceil($this->getTime() / 60) * $this->costGps;
    }
}
