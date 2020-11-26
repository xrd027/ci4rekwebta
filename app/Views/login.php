<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Login Form</h1>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'form-control'
];
$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];
?>
<?= form_open('Auth/login') ?>
<div class="form-group">
    <?= form_label("Username", "username") ?>
    <?= form_input($username) ?>
</div>
<div class="form-group">
    <?= form_label("Password", "password") ?>
    <?= form_input($password) ?>
</div>
<div class="text-right">
    <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
    <?= form_close() ?>
    <?= $this->endSection() ?>