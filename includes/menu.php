<?php 
    include_once 'metadata.php';
?>

<div id="sidebar" class="col-12 col-md-2 d-md-flex justify-content-between poppins-regular mh-100">
    <div id="sidebar-container" class="w-100 h-100 d-flex flex-column justify-content-between">
        <!-- Sidebar Header -->
        <div id="sidebar-header" class="d-flex flex-row flex-md-column flex-lg-row gap-4 gap-md-2 align-items-center">
            <img src="assets/img/svgs/logo.svg" alt="Logo">
            <p class="m-0 fs-6 fs-md-4">John</br>Octavio</p>
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