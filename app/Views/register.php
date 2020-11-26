<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
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
$repeatPassword = [
    'name' => 'repeatPassword',
    'id' => 'repeatPassword',
    'class' => 'form-control'
];
?>
<h1>Register Form</h1>
<?= form_open('Auth/register') ?>
<div class="form-group">
    <?= form_label("Username", "username") ?>
    <?= form_input($username) ?>
</div>
<div class="form-group">
    <?= form_label("Password", "password") ?>
    <?= form_input($password) ?>
</div>
<div class="form-group">
    <?= form_label("Repeat Password", "repeatPassword") ?>
    <?= form_input($repeatPassword) ?>
</div>
<div class="text-right">
    <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
    <?= form_close() ?>
    <?= $this->endSection() ?>