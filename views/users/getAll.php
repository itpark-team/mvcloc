
<div class="mb-3">
    <a class="btn btn-primary" href="/users/addNewForm">Добавить нового пользователя</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Имя</th>
        <th scope="col">Логин</th>
        <th scope="col">Пароль</th>
        <th scope="col">Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $user): ?>
        <tr scope="row">
            <td><?= $user->Id ?></td>
            <td><?= $user->Name ?></td>
            <td><?= $user->Login ?></td>
            <td><?= $user->Password ?></td>
            <td>
                <div class="d-flex">
                    <a class="btn btn-light me-2" href="/users/getbyid/<?= $user->Id ?>">Подробнее</a>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-id="<?= $user->Id ?>" id="button-open-modal">
                        Удалить
                    </button>

                </div>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Подтвердите удаление</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Подтвердите удаление
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить</button>

                <form method="post" action="/users/deletebyid/">
                    <input type="text" id="input-id-field" name="id" value="" hidden>
                    <input type="submit" class="btn btn-danger" value="Удалить">
                </form>

            </div>
        </div>
    </div>
</div>


<script>
    $(document).on("click", "#button-open-modal", function () {
        var userId = $(this).data('id');
        $("#input-id-field").val(userId);
    });
</script>