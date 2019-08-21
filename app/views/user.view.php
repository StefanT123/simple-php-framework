<?php $users = $query->getAll('users'); ?>

<form action="/user.post.php" method="POST">
    <label for="name">Enter users name</label>
    <input type="text" name="name">

    <label for="name">Enter users email</label>
    <input type="email" name="email">

    <label for="name">Enter users password</label>
    <input type="password" name="password">

    <button type="submit">Create new user</button>
</form>

<br>

<h3>Users:</h3>
<ul>
    <?php foreach ($users as $user) { ?>
        <li><?= $user->name ?></li>
    <?php } ?>
</ul>
