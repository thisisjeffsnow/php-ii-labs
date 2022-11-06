<pre><?php
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

use Traits\Hybrid;

$hybrid = new Hybrid();

$hybrid->useGas();
$hybrid->useElectric();

 /* Why does this still exist? */
$hybrid->providePower();

$hybrid->displayBattery();
$hybrid->displayGauge();