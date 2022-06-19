<?php

if (isset($_SESSION['response'])){

    if ($_SESSION['response'] == 0) {
        ?>

        <div class="mt-3 mb-3">
            <div class="fs-4 text-danger">Столик занят , выберите другой!</div>
        </div>
        <?php
    }
    else{

        ?>
        <div class="mt-3 mb-3 alert">
            <div class="fs-4 text-success">Вы успешно забронировали стол</div>
        </div>
        <?php
    }
    unset($_SESSION['response']);

}

?>

