<?php
namespace LifeLab\Human;
use LifeLab\Livable\LivableInterface;

class Human implements LivableInterface {
    public const SPECIES_NAME = 'Homo Sapien';
    public const INIT_STAMINA = 4;
    public const INIT_INTELLECT = 8;

    public function __construct(
        public string $name,
        public int $age = 0,
        public string $status = 'alive',
    ) {
        echo "Human: $this->name created." . PHP_EOL;
    }

    public function __toString(): string {
        return "Human: $this->name";
    }

    public function render() {
        echo 'Rendering human to environment.' . PHP_EOL;
    }

    public function processStimulus(string $stimulus) {
        if($stimulus == 'food') {
            echo 'Human is consuming food.' . PHP_EOL;
        } elseif ($stimulus == 'enemy') {
            echo 'Human is responding to an enemy presence.' . PHP_EOL;
            if(mt_rand(0, 1) == 1) {
                echo 'Human has chosen fight.' . PHP_EOL;
            } else {
                echo 'Human has chosen flight.' . PHP_EOL;
            }
        } else {
            echo "Human does not know how to respond to $stimulus." . PHP_EOL;
        }
    }

    public function rest(int $duration) {
        echo "Human is resting for $duration hours." . PHP_EOL;
    }

    public function reproduce(): Human {
        echo 'Human is reproducing.' . PHP_EOL;
        $child = new Human('Child');
        return $child;
    }

    public function die() {
        echo 'Human has died.' . PHP_EOL;
        $this->status = 'dead';
    }


}