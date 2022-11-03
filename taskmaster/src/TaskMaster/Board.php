<?php
namespace TaskMaster;

/**
 * Class Board
 */
class Board {
    public const NAMES = ['home', 'work'];

    public function __construct(
        public string $name = 'home'
    ) {}
}