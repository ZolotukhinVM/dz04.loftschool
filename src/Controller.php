<?php

namespace ZolotukhinVM;

class Controller
{
    public function handle()
    {
        echo BaseTariff::NAME_TARIFF . ": ";
        $base = new BaseTariff(1, 1, 21, false, false);
        echo $base->getPrice();
        echo "<hr>";
        echo HourTariff::NAME_TARIFF . ": ";
        $hour = new HourTariff(0, 60, 20, false, false);
        echo $hour->getPrice();
        echo "<hr>";
        echo DayTariff::NAME_TARIFF . ": ";
        $day = new DayTariff(10, 1479, 22, true, true);
        echo $day->getPrice();
        echo "<hr>";
        echo StudentTariff::NAME_TARIFF . ": ";
        $student = new StudentTariff(10, 2, 26, false, false);
        echo $student->getPrice();
    }
}
