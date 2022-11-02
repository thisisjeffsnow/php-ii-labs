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

    /**
     * ITTask Constructor
     */
    public function __construct(
        int    $id,
        string $title,
        string $description,
        public string $server_os = 'Ubuntu',
        public int    $memory_size_gb = 128,
        public string $language = 'PHP',
        public string $database = 'MySQL'
    ) {
        parent::__construct($id, $title, $description);
        $this->server_os = $server_os;
        $this->memory_size_gb = $memory_size_gb;
        $this->language = $language;
        $this->database = $database;
    }

    /**
     * Magic Method: __toString()
     */
    public function __toString() : string {
        $return = $this->title . ': ' . $this->description;
        $return .= count($this->objectives) > 0 ?
        ' (' . implode(' ', $this->objectives) . ')'
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
