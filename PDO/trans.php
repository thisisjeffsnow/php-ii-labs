<?php
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=phpcourse',
        'vagrant',
        'vagrant',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // hard coded values
    $firstname = 'Justin';
    $lastname = 'Caseman';
    $order_status = 'open';
    $order_amount = 20;
    $order_desc = 'Lava Lamp';


    // begin transaction
    $pdo->beginTransaction();

    $pdo->query(
        "INSERT INTO customers
        (firstname, lastname)
        VALUES
        ('$firstname', '$lastname')"
    );

    $customer_id = $pdo->lastInsertId();

    $pdo->query(
        "INSERT INTO orders
        (date, status, amount, description, customer)
        VALUES
        (CURRENT_TIMESTAMP(), '$order_status', '$order_amount', '$order_desc',
        $customer_id)"
    );

    $order_id = $pdo->lastInsertId();

    $pdo->commit();

    // didn't insert date correctly. use stored procedure to fix.
    // or learn how to insert into the date field with the unix seconds
    // instead of timestamp -.-
    $stmt = $pdo->prepare('CALL fixDate(?)');
    $stmt->execute([$order_id]);


} catch (Throwable $t) {
    if($t instanceOf PDOException) {
        echo $t->getMessage();
    } else
    {
        echo $t;
    }
}

