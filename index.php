<?php require './core/bootstrap.php';?>

<?php require './app/views/partials/header.php'; ?>

    <h1>This is my custom framework</h1>
    <?php $router->view('user'); ?>

<?php require './app/views/partials/footer.php'; ?>
