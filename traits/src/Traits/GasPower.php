<?php
namespace Traits;

trait GasPower {

    public function providePower() {
        echo 'Providing Gas Power.';
        echo PHP_EOL;
    }

    public function displayGauge() {
        echo 'Displaying Gas Gauge.';
        echo PHP_EOL;
    }

}