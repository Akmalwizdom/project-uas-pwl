<?= $this->extend('layouts/main_clear') ?>
<?= $this->section('content') ?>

<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control form-control-lg',
    'placeholder' => 'Username',
    'type' => 'text'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control form-control-lg',
    'placeholder' => 'Password',
    'type' => 'password'
];

$submit = [
    'type' => 'submit',
    'class' => 'btn btn-block btn-primary btn-lg fw-medium auth-form-btn',
    'value' => 'SIGN IN'
];
?>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="<?= base_url() ?>staradmin/dist/assets/images/logo.svg" alt="logo">
                        </div>
                        <h4>Hello! let's get started</h4>
                        <h6 class="fw-light">Sign in to continue.</h6>
                        <?php
                        if (session()->getFlashData('failed')) {
                        ?>
                            <div class="col-12 alert alert-danger" role="alert">
                                <hr>
                                <p class="mb-0">
                                    <?= session()->getFlashData('failed') ?>
                                </p>
                            </div>
                        <?php
                        }
                        ?>
                        <?= form_open('login', 'class="pt-3"') ?>

                        <div class="form-group">
                            <?= form_input($username) ?>
                        </div>
                        <div class="form-group">
                            <?= form_password($password) ?>
                        </div>
                        <div class="mt-3 d-grid gap-2">
                            <?= form_submit($submit) ?>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<?= $this->endSection() ?>