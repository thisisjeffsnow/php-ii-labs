<?php
namespace TaskMaster\Task;

/**
 * Class AbstractTask
 */
abstract class AbstractTask implements TaskInterface {
    public const TABLE = 'task';

    public string $title;
    public bool   $visibility;

    public function __construct(
        string $title,
        bool $visibility = true
    ) {
        $this->title = $title;
        $this->visibility = $visibility;
    }

    public function show() {
        $this->visibility = true;
    }

    public function hide() {
        $this->visibility = false;
    }

    /**
     * @param string $description
     */
    public abstract function add_objective(string $description);

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

}
