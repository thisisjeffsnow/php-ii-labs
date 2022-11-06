<?php

namespace LifeLab\Livable;

interface LivableInterface {

    public function render();
    public function processStimulus(string $stimulus);
    public function rest(int $duration);
    public function reproduce();
    public function die();

}