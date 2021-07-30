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
    <?php $user = $data; ?>
    <tr scope="row">
        <td><?= $user->Id ?></td>
        <td><?= $user->Name ?></td>
        <td><?= $user->Login ?></td>
        <td><?= $user->Password ?></td>
    </tr>
    </tbody>
</table>