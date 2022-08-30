<?php
include_once 'fungsi/koneksi.php';
require_once 'fungsi/function.php';
if (isset($_GET['page'])) :
    $hal = trim($_GET['page']);
    $page = halaman($hal);
else :
    $page = halaman('beranda');
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- plugin css -->
    <?php require_once './template/inc_css.php'; ?>
    <!-- end plugin css -->
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include "./template/sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include "./template/navbar.php"; ?>
                <!-- End of Topbar -->
                <!-- Page Heading -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                    include $page;
                    ?>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php require_once './template/footer.php'; ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Cancel
                    </button>
                    <a class="btn btn-primary" href="./login/">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- plugin javascript -->
    <?php require_once './template/inc_script.php'; ?>

    <!-- end plugin javascript -->
</body>

</html>