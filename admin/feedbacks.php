<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Feedbacks</title>
    <?php include "./components/admin/admin-links.php" ?>
</head>
<?php $page = "feedbacks" ?>
<?php include "./components/admin/admin-modal.php" ?>

<body data-bs-theme="" id="admin-body">
    <div class="container-fluid p-0" style="max-height: 100vh;">
        <div class="d-flex">
            <?php include "./components/admin/dashboard-menu.php" ?>
            <div class="flex-grow-1 ">
                <?php include "./components/admin/dashboard-upbar.php" ?>
                <!-- CONTENT -->
                <div class="content p-3" style="min-height: 100vh;">
                    <div class="container-fluid">
                        <h1>Feedbacks</h1>
                        <table id="feedbacksTable" class="display border w-100">
                        </table>
                    </div>
                    <!-- CONTENT 2 -->
                </div>
            </div>
        </div>
    </div>
</body>


</html>