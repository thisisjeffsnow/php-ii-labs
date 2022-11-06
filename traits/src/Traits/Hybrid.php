<?php
namespace Traits;

class Hybrid {

    use GasPower, ElectricPower {
        GasPower::providePower as protected provideGasPower;
        GasPower::providePower insteadOf ElectricPower;
        ElectricPower::providePower as protected provideElectricPower;
    }

    public function __construct() {
        echo 'New Hybrid on the line.';
        echo PHP_EOL;
    }

    public function useGas() {
        $this->provideGasPower();
    }

    public function useElectric() {
        $this->provideElectricPower();
    }
    
}