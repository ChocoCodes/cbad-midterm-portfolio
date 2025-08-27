<?php 
    include 'includes/metadata.php';
    $PageTitle = $META['projects']['title'];
    $PageHeader = $META['projects']['header'];

    include_once 'includes/head.php';
    include_once 'includes/menu.php';
?>
    <div class="col-12 col-md-10 main-container overflow-y-auto overflow-x-hidden d-flex justify-content-between align-items-center">
        <div class="project-section main-content mx-auto d-flex flex-column position-relative">
            <div style="--glow-width: 23rem; --glow-height: 23rem; --glow-alpha: 0.85; top: -10%; right: -10%;" class="background-glow position-absolute rounded-circle d-none d-md-block"></div>
            <!-- Page Header Section --> 
            <p class="poppins-medium text-heading fs-2 m-0"><?= $PageHeader ?></p>
            <!-- Project Cards Container -->
            <div id="project-container" class="row g-4 px-2"></div>
        </div>    
    </div>
<?php include_once 'includes/footer.php'?>