<?php require 'partials/header.php'; ?>

<h1>User page</h1>

<form action="/user" method="POST">
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

<?php require 'partials/footer.php' ?>
