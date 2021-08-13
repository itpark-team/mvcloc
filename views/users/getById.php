<?php $user = $data; ?>

<div class="mb-3">
    <form method="post" action="/users/updateForm">
        <input type="text" name="id" value="<?= $user->Id ?>" hidden>
        <input type="submit" class="btn btn-dark" value="Изменить текущего пользователя">
    </form>
</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Имя</th>
        <th scope="col">Логин</th>
        <th scope="col">Пароль</th>
    </tr>
    </thead>
    <tbody>

    <tr scope="row">
        <td><?= $user->Id ?></td>
        <td><?= $user->Name ?></td>
        <td><?= $user->Login ?></td>
        <td><?= $user->Password ?></td>
    </tr>
    </tbody>
</table>