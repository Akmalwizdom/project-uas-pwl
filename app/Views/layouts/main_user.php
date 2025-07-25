<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>staradmin/dist/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url() ?>staradmin/dist/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>staradmin/dist/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>staradmin/dist/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>staradmin/dist/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>staradmin/dist/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>staradmin/dist/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url() ?>staradmin/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url() ?>staradmin/dist/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>staradmin/dist/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>staradmin/dist/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>staradmin/dist/assets/images/favicon.png" />
</head>

<body class="with-welcome-text">
    <div class="container-scroller">

        <?= $this->include('layouts/header') ?>

        <?= $this->renderSection('content') ?>
        <div class="container-fluid page-body-wrapper">

            <?= $this->include('layouts/sidebar_user') ?>

            <div class="main-panel">

                <?= $this->include('layouts/content_user') ?>
                <?= $this->include('layouts/footer') ?>

            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url() ?>staradmin/dist/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?= base_url() ?>staradmin/dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url() ?>staradmin/dist/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="<?= base_url() ?>staradmin/dist/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>staradmin/dist/assets/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>staradmin/dist/assets/js/template.js"></script>
    <script src="<?= base_url() ?>staradmin/dist/assets/js/settings.js"></script>
    <script src="<?= base_url() ?>staradmin/dist/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>staradmin/dist/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url() ?>staradmin/dist/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>staradmin/dist/assets/js/dashboard.js"></script>
    <script src="<?= base_url() ?>staradmin/dist/assets/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>staradmin/dist/assets/js/chart.js"></script>
    <!-- End custom js for this page-->
</body>

</html>