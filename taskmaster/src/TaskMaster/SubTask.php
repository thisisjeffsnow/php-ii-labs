<?php
namespace TaskMaster;
/**
 * Class SubTask
 */
class SubTask extends Task {
    public const TABLE = 'task';
    
    public int    $id;
    public int    $parent_id;
    public string $title;
    public string $description;
    public string $visibility;
    public string $location;
    public string $expiry;
    public string $frequency;
    public int    $enjoyment;
    public int    $importance;

    
    public function __construct(
        int $id,
        int $parent_id,
        string $title,
        string $description
    ) {
        parent::__construct($id, $title, $description);
        $this->parent_id = $parent_id;    
    }


    /**
     * @return int
     */
    public function get_id() : int {
        return $this->id;
    }
    
    /**
     * @return int
     */
    public function get_parent_id() : int {
        return $this->parent_id;
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
