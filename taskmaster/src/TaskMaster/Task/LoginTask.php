<?php
namespace TaskMaster\Task;

/**
 * Class: LoginTask
 * Parent: AbstractTask
 */
class LoginTask extends AbstractTask {

    public const FRIENDLY_NAME = 'Login Task';
    public const FRIENDLY_DESC = 'Login to a website, app, or server.';

    public string $url;

    /**
     * LoginTask Constructor
     */
    public function __construct(
        string $title,
        string $url,
        bool   $visibility = true,
    ) {
        parent::__construct($title, $visibility);
        $this->url = $url;
    }

    /**
     * Magic Methods
     */
    public function __toString() : string {
        $return = $this->title . ' [' . $this->url . ']';
        return $return;
    }

    /**
     * @return void
     */
    public function reset_defaults() : void {
        $this->title = 'New Title';
        $this->visibility = true;
        $this->url = 'https://www.google.com';
    }

}
