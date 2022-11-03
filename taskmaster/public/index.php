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

use TaskMaster\Task\ITTask;
use TaskMaster\Objective\Objective;

echo 'Create a new IT Task about applying updates. What does it look like?';
echo PHP_EOL;

$it_task = new ITTask(
    'Apply Updates',
    'Run updates on the local machine and reboot afterward'
);

echo $it_task;
echo PHP_EOL;

echo 'Add objectives to the IT Task. Now what does it look like?';
echo PHP_EOL;

$it_task->add_objective('Log into the server.');
$it_task->add_objective('Search for updates.');
$it_task->add_objective('Apply updates.');
$it_task->add_objective('Reboot server.');

echo $it_task;
echo PHP_EOL;

echo 'Try to set a property that does not exist on IT Task.';
echo PHP_EOL;

try {
    $it_task->author = 'Jeff Snow';
} catch (Exception $e) {
    echo $e->getMessage();
    echo PHP_EOL;
}

echo 'IT Task Visibility = ' . ($it_task->visibility ? 'Shown' : 'Hidden');
echo PHP_EOL;

echo 'Hide the IT Task.';
echo PHP_EOL;

$it_task->hide();

echo 'IT Task Visibility = ' . ($it_task->visibility ? 'Shown' : 'Hidden');

