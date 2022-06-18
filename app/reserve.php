<?php
require_once 'connection/Connection.php';

function reserve(string $name, $phone, $date, $time)
{
    $database = new DataBase();

    $database = $database->getDatabase();

    $sql = "INSERT INTO `reserve` (`id`, `id_time`, `name`, `phone`, `date`) VALUES (NULL, :id_time, :name, :phone, :date)";

    $add = $database->prepare($sql);

    $add->execute([
            ':id_time' => $time,
            ':name' => $name,
            ':phone' => $phone,
            ':date' => $date,
    ]);


}

reserve($_POST['name'], $_POST['phone'], $_POST['date'], $_POST['sel']);