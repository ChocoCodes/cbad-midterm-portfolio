<?php 
    include_once 'metadata.php';
?>

<div id="sidebar" class="col-12 col-md-2 d-md-flex justify-content-between poppins-regular mh-100">
    <div id="sidebar-container" class="w-100 h-100 d-flex flex-column gap-2 gap-md-0 justify-content-between apply-slide-in">
        <!-- Sidebar Header -->
        <div id="sidebar-header" class="d-flex mx-auto">
            <img src="assets/img/svgs/logo.svg" alt="Logo">
        </div>

        <!-- Sidebar Footer -->
        <div class="w-100 d-flex flex-column gap-3">
            <!-- Sidebar Nav Items -->
            <ul class="sidebar-nav d-flex flex-md-column mx-auto mx-md-0 gap-4 gap-md-2 gap-md-2 text-center text-md-start">
                <?php 
                    foreach($META as $Key => $Value) {
                        echo "
                            <li class='sidebar-nav-item fs-4'>
                                <a href='{$Value['page']}'>{$Value['title']}</a>
                            </li>
                        ";
                    };
                ?>
            </ul>
            <div id="separator" class="w-100 rounded-pill"></div>
            <div class="d-flex flex-column text-center text-md-start">
                <span id="time"></span>
                <span id="date"></span>
            </div>
        </div>
    </div>
</div>