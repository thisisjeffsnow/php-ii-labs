<?php
namespace TaskMaster;
/**
 * Class Task
 */
class Task {
    public const TABLE = 'task';

    public int    $id;
    public string $title;
    public string $description;
    public string $visibility = 'show';
    public string $location = 'home';
    public string $expiry = '1/1/1970';
    public string $frequency = 'daily';
    public int    $enjoyment = 5;
    public int    $importance = 5;

    public function __construct(
        int    $id,
        string $title,
        string $description
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }

    /* Need more methods for the other variables. */
    /* $id should be unique and automatically assigned somehow. */

    /**
     * @return int
     */
    public function get_id() : int {
        return $this->id;
    }

    /**
     * @return string
     */
    public function get_title() : string {
        return $this->title;
    }

    /**
     * @return void
     */
    public function set_title(string $title) : void {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function get_description() : string {
        return $this->description;
    }

    /**
     * @return void
     */
    public function set_description(string $description) : void {
        $this->description = $description;
    }

}
