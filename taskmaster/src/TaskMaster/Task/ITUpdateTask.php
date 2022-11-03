<?php
namespace TaskMaster\Task;

/**
 * Class:  UpdateTask
 * Parent: AbstractTask
 */

class ITUpdateTask extends AbstractTask {
    public const FRIENDLY_NAME = 'Update Task';
    public const FRIENDLY_DESC = 'Run updates on a server or workstation.';

    public string $server;

    /**
     * ITUpdateTask Constructor
     */
    public function __construct(
        string $title,
        string $server,
        bool   $visibility = true,
    ) {
        parent::__construct($title, $visibility);
        $this->server = $server;
    }

    /**
     * Magic Methods
     */
    public function __toString() : string {
        $return = $this->title . ' [' . $this->server . ']';
        $return .= count($this->objectives) > 0 ?
        ' [' . implode(' ', $this->objectives) . ']'
        : '';
        return $return;
    }

    /**
     * @return void
     */
    public function reset_defaults() : void {
        $this->title = 'New Update Task';
        $this->visibility = true;
        $this->server = 'Home Workstation';
    }


}
