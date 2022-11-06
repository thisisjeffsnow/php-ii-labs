<?php
namespace LifeLab\Virus;
use LifeLab\Livable\LivableInterface;
use LifeLab\Building\BuildingInterface;

class Virus implements LivableInterface {
    public const INIT_STAMINA = 10;
    public const INIT_INTELLECT = 2;

    public function __construct(
        public string $name,
        public BuildingInterface $building,
        public string $status = 'alive',
    ) {
        echo "Virus: $this->name was created in $building." . PHP_EOL;
    }

    public function __toString(): string {
        return "Virus: $this->name";
    }

    public function render() {
        echo 'Virus has rendered itself to the environment.' . PHP_EOL;
    }

    public function processStimulus(string $stimulus) {
        echo 'Virus does not respond to any stimulus.' . PHP_EOL;
    }

    public function rest(int $duration) {
        echo 'Virus does not rest.' . PHP_EOL;
    }

    public function reproduce() : array {
        $return = [];
        for($i = 0; $i < mt_rand(2, 4); $i++) {
            $child = new Virus("Child $i");
            $return[] = $child;
            echo "Virus has reproduced $child." . PHP_EOL;
        }
        return $return;
    }
    public function die() {
        echo "Virus has died.";
        $this->status = 'dead';
    }
}