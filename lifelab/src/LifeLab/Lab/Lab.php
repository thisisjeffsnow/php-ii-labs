<?php

namespace LifeLab\Lab;
use LifeLab\Livable\LivableInterface;
use LifeLab\Building\BuildingInterface;

class Lab implements BuildingInterface {
    public const BUILDING_TYPE = 'warehouse';

    public function __construct(
        public string $name,
        public array $experiments = [],
    ) {
        echo "Lab: $this->name has been created." . PHP_EOL;
    }

    public function __toString(): string {
        return "Lab: $this->name";
    }

    public function open() {
        echo 'Lab is now open.' . PHP_EOL;
    }

    public function close() {
        echo 'Lab is now closed.' . PHP_EOL;
    }
}