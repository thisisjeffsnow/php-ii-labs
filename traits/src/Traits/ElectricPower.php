<?php
namespace Traits;

trait ElectricPower {

    public function providePower() {
        echo 'Providing Electric Power.';
        echo PHP_EOL;
    }

    public function displayBattery() {
        echo 'Displaying Battery Level.';
        echo PHP_EOL;
    }


}