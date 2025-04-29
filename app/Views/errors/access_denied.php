<?= $this->extend('layouts/main_clear') ?>
<?= $this->section('content') ?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-6 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo text-center">
                            <img src="<?= base_url() ?>staradmin/dist/assets/images/logo.svg" alt="logo">
                        </div>
                        <div class="text-center">
                            <h1 class="display-1 text-danger">403</h1>
                            <h3 class="font-weight-light">Access Denied</h3>
                            <div class="mt-3 d-flex justify-content-center gap-3">
                                <a href="<?= base_url(session()->get('role') === 'admin' ? 'admin' : 'user') ?>"
                                    class="btn btn-primary btn-lg font-weight-medium">
                                    <i class="mdi mdi-home"></i> Go to Dashboard
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<?= $this->endSection() ?>