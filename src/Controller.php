<?php

class Controller
{
    public function handle()
    {
        echo BaseTariff::NAME_TARIFF . ": ";
        $base = new BaseTariff(10, 60, 15, true);
        echo $base->getPrice();
        echo "<hr>";
        echo HourTariff::NAME_TARIFF . ": ";
        $hour = new HourTariff(10, 60, 20, true);
        echo $hour->getPrice();
        echo "<hr>";
        echo DayTariff::NAME_TARIFF . ": ";
        $day = new DayTariff(10, 58, 20, true, false);
        echo $day->getPrice();
        echo "<hr>";
        echo StudentTariff::NAME_TARIFF . ": ";
        $student = new StudentTariff(10, 60, 20, true);
        echo $student->getPrice();
    }
}
