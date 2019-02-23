<?php

class Controller
{
    public function handle()
    {
        echo BaseTariff::NAME_TARIFF . ": ";
        $base = new BaseTariff(0, 180, 22, true, false);
        echo $base->getPrice();
        echo "<hr>";
        echo HourTariff::NAME_TARIFF . ": ";
        $hour = new HourTariff(0, 180, 22, true, true);
        echo $hour->getPrice();
        echo "<hr>";
        echo DayTariff::NAME_TARIFF . ": ";
        $day = new DayTariff(10, 1471, 22, false, false);
        echo $day->getPrice();
        echo "<hr>";
        echo StudentTariff::NAME_TARIFF . ": ";
        $student = new StudentTariff(10, 2, 26, false, false);
        echo $student->getPrice();
    }
}
