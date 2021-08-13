<?php $user = $data; ?>
<form method="post" action="/users/update">
    <input type="text" name="id" value="<?=$user->Id?>" hidden>

    <div class="mb-2">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="abcdef" value="<?=$user->Name?>">
    </div>
    <div class="mb-2">
        <label for="login" class="form-label">Login</label>
        <input type="text" class="form-control" id="login" name="login" placeholder="abcdef" value="<?=$user->Login?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="abcdef" value="<?=$user->Password?>">
    </div>
    <input type="submit" class="btn btn-dark" value="Сохранить изменения">
</form>

