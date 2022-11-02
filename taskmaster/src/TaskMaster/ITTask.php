<?php
namespace TaskMaster;
/**
 * Class:  ITTask
 * Parent: Task
 */
class ITTask extends Task {
    public const LANGUAGE = ['PHP', 'Python', 'Ruby', 'Perl'];

    public string $server_os = 'Ubuntu';
    public int    $memory_size_gb = 128;
    public string $language = 'PHP';
    public string $database = 'MySQL';

    public function __construct(
        int    $id,
        string $title,
        string $description,
        string $server_os,
        string $memory_size_gb,
        string $language,
        string $database,
    ) {
        parent::__construct($id, $title, $description);
        $this->server_os = $server_os;
        $this->memory_size_gb = $memory_size_gb;
        $this->language = $language;
        $this->database = $database;
    }

    /* Methods */

}
