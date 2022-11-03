<?php
namespace TaskMaster\Objective;
/**
 * Class: Objective
 */
class Objective {

    /**
     * Objective Constructor
     */
    public function __construct(
      public string $description = 'New Objective'
    ) {}

    /**
     * Magic Method __toString()
     */
    public function __toString() {
      return $this->description;
    }

    /**
     * @param string $description
     * @return void
     */
    public function set_description($description) {
      $this->description = $description;
    }

    /**
     * @return string
     */
    public function get_description() : string {
      return $this->description;
    }



}
