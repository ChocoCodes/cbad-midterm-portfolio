<?php 
    include 'includes/metadata.php';
    $PageTitle = $META['projects']['title'];
    $PageHeader = $META['projects']['header'];

    include_once 'includes/head.php';
?>
    <div class="row min-vh-100 poppins-regular position-relative overflow-x-hidden">
        <?php include_once 'includes/menu.php'; ?>
        <div class="col-sm-10 main-container overflow-y-auto overflow-x-hidden d-flex justify-content-between align-items-center">
            Content
        </div>
    </div>
<?php include_once 'includes/footer.php'?>