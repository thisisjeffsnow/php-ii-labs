<?php
namespace TaskMaster\Task;
use TaskMaster\Objective\Objective;
use Exception;

/**
 * Class AbstractTask
 */
abstract class AbstractTask implements TaskInterface {
    public const TABLE = 'task';

    public string $title;
    public bool   $visibility;
    public array  $objectives = [];

    /* AbstractTask Constructor */
    public function __construct(
        string $title,
        bool $visibility = true
    ) {
        $this->title = $title;
        $this->visibility = $visibility;
    }

    /* Magic Methods */
    public function __set($key, $value) {
        $message = 'Cannot access nonexistent or inaccessible properties.';
        throw New Exception($message);
    }

    /* Required Interface Methods */
    public function show() {
        $this->visibility = true;
    }

    public function hide() {
        $this->visibility = false;
    }

    /* Abstract Method Subclass Requirement */
    /**
     * @return void
     */
    public abstract function reset_defaults() : void;

    /* Inheritable Methods */
    /**
     * @return string
     */
    public function get_title() : string {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function set_title(string $title) : void {
        $this->title = $title;
    }

    /**
     * @param string $description
     * @return Objective
     */
    public function add_objective(string $description) : Objective {
        $objective = New Objective($description);
        $this->objectives[] = $objective;
        return $objective;
    }

}
