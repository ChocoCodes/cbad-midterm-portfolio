<?php 
    include 'includes/metadata.php';
    $PageTitle = $META['projects']['title'];
    $PageHeader = $META['projects']['header'];

    include_once 'includes/head.php';
?>
    <div class="row min-vh-100">
        <?php include_once 'includes/menu.php'; ?>
        <div class="col-sm-10 bg-main">Content</div>
    </div>
<?php include_once 'includes/footer.php'?>