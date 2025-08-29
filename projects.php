<?php 
    include 'includes/metadata.php';
    $PageTitle = $META['projects']['title'];
    $PageHeader = $META['projects']['header'];

    include_once 'includes/head.php';
    include_once 'includes/menu.php';
?>
    <div class="col-12 col-md-10 main-container overflow-y-auto overflow-x-hidden d-flex justify-content-between align-items-center">
        <div style="--glow-width: 23rem; --glow-height: 23rem; --glow-alpha: 0.85; top: -5%; right: -10%;" class="background-glow position-absolute rounded-circle"></div>
        <div class="project-section main-content mx-auto d-flex flex-column gap-2 position-relative">
            <!-- Page Header Section --> 
            <p class="poppins-medium text-heading fs-2 apply-fade-in"><?= $PageHeader ?></p>
            <!-- Project Cards Container -->
            <div id="project-container" class="row g-4 px-2 apply-fade-in" style="--delay: 0.2s"></div>
        </div>    
    </div>
<?php include_once 'includes/footer.php'?>