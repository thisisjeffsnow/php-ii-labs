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

use TaskMaster\Task;
use TaskMaster\SubTask;

echo '<p>Setting parent task.</p>';

$task = new Task(
	0,
	'Trash',
	'Empty the trash.'
);

var_dump($task);

echo '<p>Setting title.</p>';

$task->set_title('Trash Master');

var_dump($task);

echo '<p>Setting child tasks.</p>';

$child_task_1 = new SubTask(
    1,
    0,
    'Chuck Bag',
    'Throw the bag of garbage into the dumpster.',
);

$child_task_2 = new SubTask(
    2,
    0,
    'Replace Bag',
    'Grab a new bag under the sink and put it into the garbage bucket.',
);

var_dump($child_task_1);
var_dump($child_task_2);

echo '<p>Identifying parent task.</p>';

echo $child_task_1->get_parent_id();

echo '<p>Identifying parent task (2).</p>';

echo $child_task_2->get_parent_id();


