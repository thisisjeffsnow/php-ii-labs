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

use LifeLab\Human\Human;
use Lifelab\Lab\Lab;
use LifeLab\Virus\Virus;
use LifeLab\LifeLabException\LifeLabException;

$human = new Human('Snow');
$human->rest(10);
$human->processStimulus('enemy');

$lab = new Lab('Snow Laboratories');

try {
    $virus = new Virus('Snow Virus', $lab);
    throw new LifeLabException('You threw a LifeLab Exception.');
    throw new Exception('You threw a normal Exception.');
    
} catch(LifeLabException $e) {
    echo 'Caught LifeLabException: ' . $e->getMessage();
    echo PHP_EOL;
} catch(Exception $e) {
    echo 'Caught Exception: ' . $e->getMessage();
    echo PHP_EOL;
} finally {
    echo 'We are still going to do some lab stuff, though. Finally.';
    echo PHP_EOL;
}
