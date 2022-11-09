<?php
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=phpcourse',
        'vagrant',
        'vagrant',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $stmt = $pdo->prepare('CALL findDesc(?)');
    $keyword = 'test';
    $stmt->execute(['%' . $keyword . '%']);

    // no way to get results from a SELECT stored procedure?
    var_dump($pdo);
    
} catch (Throwable $t) {
    if($t instanceof PDOException) {
        echo $t->getMessage();
    } else {
        echo $t;
    }
}


try {
    $stmt = $pdo->prepare('CALL fixDate(?)');
    $order = 100;
    $stmt->execute([$order]);

    var_dump($pdo);
} catch (Throwable $t) {
    if($t instanceof PDOException) {
        echo $t->getMessage();
    } else {
        echo $t;
    }
}