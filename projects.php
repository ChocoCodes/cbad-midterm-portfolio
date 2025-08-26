<?php 
    include 'includes/metadata.php';
    $PageTitle = $META['projects']['title'];
    $PageHeader = $META['projects']['header'];

    include_once 'includes/head.php';
?>
    <?php include_once 'includes/menu.php'; ?>
    <div style="--glow-width: 23rem; --glow-height: 23rem; --glow-alpha: 0.85; top: -10%; right: -10%;" class="background-glow position-absolute rounded-circle"></div>
    <div class="col-sm-10 main-container overflow-y-auto overflow-x-hidden d-flex justify-content-between align-items-center">
        <div class="project-section main-content w-75 mx-auto d-flex flex-column">
            <!-- Page Header Section --> 
            <p class="poppins-medium text-heading fs-2"><?= $PageHeader ?></p>
            <!-- Project Cards Container -->
            <div id="project-container" class="w-100 mx-auto d-flex flex-wrap gap-5"></div>
        </div>    
    </div>
<?php include_once 'includes/footer.php'?>