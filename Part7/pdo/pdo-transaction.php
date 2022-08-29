<?php
try {
    $db_name = "mysql:host=localhost;dbname=student";
    $username = "root";
    $password = "";
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    $conn = new PDO($db_name, $username, $password, $options);

    //  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();
    $sql1 = $conn->prepare("INSERT INTO personal (name,age,gender,city)
    VALUES (?,?,?,?)");
    $sql2 = $conn->prepare("UPDATE city SET tcities = tcities + 1 WHERE city = ?");

    $sql1->execute(["Morgan", 22, "M", "delhi"]);
    $sql2->execute(["delhi"]);
    $conn->commit();
    echo "All data saved";
} catch (Exception $th) {
    $conn->rollBack();
    echo $th->getMessage();
}