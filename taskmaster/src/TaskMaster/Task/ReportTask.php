<?php
namespace TaskMaster\Task;

/**
 * Class:  ReportTask
 * Parent: AbstractTask
 */

class ReportTask extends AbstractTask {
    public const FRIENDLY_NAME = 'Report Task';
    public const FRIENDLY_DESC = 'Run and/or create a report.';

    public string $report_name;
    public string $report_location;

    /**
     * ReportTask Constructor
     */
    public function __construct(
        string $title,
        string $report_name,
        string $report_location,
        bool   $visibility = true,
    ) {
        parent::__construct($title, $visibility);
        $this->report_name = $report_name;
        $this->report_location = $report_location;
    }

    /**
     * Magic Methods
     */
    public function __toString() : string {
        $return = $this->title . ' [' . $this->report_name . ': '
        . $this->report_location . ']';
        return $return;
    }

    /**
     * @return void
     */
    public function reset_defaults() : void {
        $this->title = 'New Title';
        $this->visibility = true;
        $this->report_name = 'New Report';
        $this->report_location = 'Home Workstation';
    }

}
