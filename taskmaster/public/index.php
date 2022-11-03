<?php
/**
 * Application Entry
 */
define('BASE', realpath(__DIR__ . '/../'));

spl_autoload_register(
    function ($class) {
        $file = str_replace('\\', '/', $class) . '.php';
        require BASE . '/src/' . $file;
    }
);

use TaskMaster\Task\ITUpdateTask;
use TaskMaster\Task\ReportTask;
use TaskMaster\Objective\Objective;

echo 'Create a new IT Update Task about applying updates.'
. ' What does it look like?';
echo PHP_EOL;

$it_update_task = new ITUpdateTask(
    'Apply Updates',
    'Corporate Workstation',
    true,
);

echo $it_update_task;
echo PHP_EOL;

echo 'Add objectives to the IT Update Task. Now what does it look like?';
echo PHP_EOL;

$it_update_task->add_objective('Log into the server.');
$it_update_task->add_objective('Search for updates.');
$it_update_task->add_objective('Apply updates.');
$it_update_task->add_objective('Reboot server.');

echo $it_update_task;
echo PHP_EOL;

echo 'Try to set a property that does not exist on IT Update Task.';
echo PHP_EOL;

try {
    $it_update_task->author = 'Jeff Snow';
} catch (Exception $e) {
    echo $e->getMessage();
    echo PHP_EOL;
}

echo 'IT Update Task Visibility = '
. ($it_update_task->visibility ? 'Shown' : 'Hidden');
echo PHP_EOL;

echo 'Hide the IT Update Task.';
echo PHP_EOL;

$it_update_task->hide();

echo 'IT Update Task Visibility = '
. ($it_update_task->visibility ? 'Shown' : 'Hidden');
echo PHP_EOL;



/* Report Task Test */

echo 'Create a Report Task. What does it look like?';
echo PHP_EOL;

$report_task = New ReportTask(
    'Monthly EPLS Reporting',
    'EPLS Report (login.gov)',
    '\\\\MT_HOST',
    true,
);

echo $report_task;
echo PHP_EOL;

echo 'Add objectives to the Report Task.';
echo PHP_EOL;

$report_task->add_objective('Get the entity exception list from website.');
$report_task->add_objective('Run the report. 30 minutes usually.');
$report_task->add_objective('Update shared location with new report.');

echo $report_task;
echo PHP_EOL;

echo 'Try to set a property that does not exist on Report Task.';
echo PHP_EOL;

try {
    $report_task->author = 'Jeff Snow';
} catch (Exception $e) {
    echo $e->getMessage();
    echo PHP_EOL;
}

echo 'Report Task Visibility = '
. ($report_task->visibility ? 'Shown' : 'Hidden');
echo PHP_EOL;

echo 'Hide the Report Task.';
echo PHP_EOL;

$report_task->hide();

echo 'Report Task Visibility = '
. ($report_task->visibility ? 'Shown' : 'Hidden');
echo PHP_EOL;

