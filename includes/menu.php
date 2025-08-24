<?php 
    include_once 'metadata.php';
?>

<div id="sidebar" class="col-sm-2 d-flex justify-content-between poppins-regular">
    <div id="sidebar-container" class="w-100 d-flex flex-column justify-content-between">
        <!-- Sidebar Header -->
        <div id="sidebar-header" class="d-flex gap-2 align-items-center">
            <img src="assets/img/svgs/logo.svg" alt="Logo">
            <p class="fs-4">John</br>Octavio</p>
        </div>

        <!-- Sidebar Footer -->
        <div class="w-100 d-flex flex-column gap-3">
            <!-- Sidebar Nav Items -->
            <ul class="sidebar-nav d-flex flex-column gap-1 align-start">
                <?php 
                    foreach($META as $Key => $Value) {
                        echo "
                            <li class='sidebar-nav-item fs-3'>
                                <a href='{$Value['page']}'>{$Value['title']}</a>
                            </li>
                        ";
                    };
                ?>
            </ul>
            <div id="separator" class="w-100 rounded-5"></div>
            <div class="d-flex flex-column">
                <span id="time"></span>
                <span id="date"></span>
            </div>
        </div>
    </div>
</div>