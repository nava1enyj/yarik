<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="app/reserve.php">
                    <div class="d-flex justify-content-center">

                        <div class="col-5 me-3">
                            <div class="mb-3">
                                <label for="name" class="form-label">Имя</label>
                                <input type="text" class="form-control" name="name" required id="name">
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="mb-3">
                                <label for="" class="form-label">Номер телефона</label>
                                <div class="d-flex align-items-center">
                                    <div class="fs-6 me-2">+7</div>
                                    <input class="form-control" id="phoneNumber" required name="phone" maxlength="16"/>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">

                        <div class="col-5 me-3">
                            <div class="mb-3">
                                <label for="date" class="form-label">Дата</label>
                                <input type="date" class="form-control" name="date" min="<?php echo date('Y-m-d'); ?>" id="date">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">

                                <label for="date" class="form-label">Выберите время</label>
                                <select class="form-select" name="sel" aria-label="Default select example">

                                    <?php

                                    require_once 'app/connection/Connection.php';

                                    $database = new DataBase();

                                    $database = $database->getDatabase();

                                    $sql = "SELECT * FROM `time`";

                                    $times = $database->query($sql);

                                    while ($row = $times->fetch()) {


                                        ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['value'] ?></option>
                                        <?php
                                    }


                                    ?>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center">

                        <div class="col-5">
                            <div class="mb-3">

                                <label for="date" class="form-label">Выберите стол</label>

                                <select class="form-select" name="stol" aria-label="Default select example">

                                    <?php

                                    $sql = "SELECT * FROM `stol`";

                                    $stol = $database->query($sql);

                                    while ($row = $stol->fetch()) {


                                        ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                        <?php
                                    }


                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>