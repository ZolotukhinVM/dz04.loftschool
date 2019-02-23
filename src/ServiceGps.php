<?php

trait ServiceGps
{
    protected $costGps = 15;

    public function getTotalCostGps()
    {
//        if ($this->time < 60) {
//            throw new Exception("Услуга доступна минимум 1 час");
//        }
        $totalTime = (is_null($this->userTime)) ? $this->time : $this->userTime;
        return ceil($totalTime / 60) * $this->costGps;
    }
}
