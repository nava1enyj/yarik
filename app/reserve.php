<?php
session_start();
require_once 'connection/Connection.php';

function reserve(string $name, $phone, $date, $time, $stol)
{
    $database = new DataBase();

    $database = $database->getDatabase();

    $sql = "SELECT * FROM `reserve`";

    $times = $database->query($sql);

    $zanyat = 0;

    while ($row = $times->fetch()) {
        if ($row['date'] == $date) {
            if ($row['id_time'] == $time) {


            }
        }

    }

    $sql = "SELECT * FROM `reserve`";

    $times = $database->query($sql);

    while ($row = $times->fetch()) {
        if ($row['date'] == $date) {
            if ($row['id_time'] == $time) {
                if ($row['id_stol'] == $stol) {

                    $zanyat = 1;
                }


            }
        }

    }

    if ($zanyat === 1) {
        $_SESSION['response'] = 0;
    } else {

        $sql = "INSERT INTO `reserve` (`id`, `id_time`, `id_stol` , `name`, `phone`, `date`) VALUES (NULL, :id_time, :id_stol, :name, :phone, :date)";

        $add = $database->prepare($sql);


        $add->execute([
            ':id_time' => $time,
            ':id_stol' => $stol,
            ':name' => $name,
            ':phone' => $phone,
            ':date' => $date,
        ]);

        $_SESSION['response'] = 1;
    }

    header('Location: ../index.php');

}

reserve($_POST['name'], $_POST['phone'], $_POST['date'], $_POST['sel'], $_POST['stol']);