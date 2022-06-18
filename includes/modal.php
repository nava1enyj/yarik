<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="mb-3">
                                <label for="" class="form-label">Номер телефона</label>
                                <div class="d-flex align-items-center">
                                    <div class="fs-6 me-2">+7</div>
                                    <input class="form-control" id="phoneNumber" name="phone" maxlength="16" />
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">

                        <div class="col-5 me-3">
                            <div class="mb-3">
                                <label for="date" class="form-label">Дата</label>
                                <input type="date" class="form-control" name="date" id="date">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">

                                <label for="date" class="form-label">Выберите время</label>
                                <select class="form-select" name="sel" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
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