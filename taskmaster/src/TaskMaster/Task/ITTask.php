<?php
namespace TaskMaster\Task;
/**
 * Class:  ITTask
 * Parent: AbstractTask
 */
use TaskMaster\Objective\Objective;
use Exception;
class ITTask extends AbstractTask {
    public const LANGUAGE = ['PHP', 'Python', 'Ruby', 'Perl'];

    public array $objectives = [];

    /**
     * ITTask Constructor
     */
    public function __construct(
        string $title,
        bool   $visibility = true,
        public string $server_os = 'Ubuntu',
        public int    $memory_size_gb = 128,
        public string $language = 'PHP',
        public string $database = 'MySQL'
    ) {
        parent::__construct($title, $visibility);
    }

    /**
     * Magic Method: __toString()
     */
    public function __toString() : string {
        $return = $this->title . ' [' . $this->server_os . ', '
        . $this->memory_size_gb . ', ' . $this->language . ', '
        . $this->database . ']';
        $return .= count($this->objectives) > 0 ?
        ' [' . implode(' ', $this->objectives) . ']'
        : '';
        return $return;
    }

    /**
     * Magic Method: __set()
     */
    public function __set($key, $value) {
        $message = 'Cannot set ITTask properties that are not accessible'
        . ' or defined.';
        throw New Exception($message);
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
