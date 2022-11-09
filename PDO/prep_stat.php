<?php

class NewCustomer {

    public function __construct(
        public string $firstname,
        public string $lastname,
    ) {}

}


$customer = new NewCustomer('Sally','Fields');

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=phpcourse',
        'vagrant',
        'vagrant',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $stmt = $pdo->prepare(
        'INSERT INTO customers (firstname, lastname) VALUES (?, ?)'
    );

    $stmt->execute([$customer->firstname, $customer->lastname]);
} catch (Throwable $e) {
    if($e instanceof PDOException) {
        echo $e->getMessage();
    } else {
        echo $e;
    }
    exit();
}
echo $customer->firstname . ' '. $customer->lastname . ' has been added.';
echo PHP_EOL;