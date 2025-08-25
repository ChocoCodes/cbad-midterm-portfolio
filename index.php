<?php 
    include 'includes/metadata.php';
    $PageTitle = $META['home']['title'];
    $PageHeader = $META['home']['header'];

    include_once 'includes/head.php';
?>
    <div class="row min-vh-100 poppins-regular position-relative overflow-x-hidden">
        <?php include_once 'includes/menu.php'; ?>
        <div style="--glow-width: 23rem; --glow-height: 23rem; top: -10%; right: -10%;" class="background-glow position-absolute rounded-circle"></div>
        <div class="col-sm-10 main-container overflow-y-auto overflow-x-hidden d-flex justify-content-between align-items-center">
            <div class="main-content w-75 mx-auto d-flex flex-column ">
                <div class="d-flex gap-3 flex-column">
                    <!-- Page Header Section --> 
                    <p class="poppins-medium text-heading fs-2"><?= $PageHeader ?></p>
                    <!-- Hero Section -->
                    <div class="d-flex hero align-items-center">
                        <img id="hero-image" class="rounded-circle" style="--image-width:375px; --image-height:375px;" src="assets/img/image-port.jpg" alt="Image of John Octavio">
                        <div class="d-flex flex-column gap-3">
                            <h3 class="text-heading poppins-regular">Full Stack Developer</h3>
                            <h1 class="poppins-semibold text-accent lh-base">John Roland </br>Octavio</h1>
                            <p class="w-75 text-paragraph">A precise and analytical CS student passionate about building clean and effective solutions.</p>
                            <div class="d-flex gap-4">
                                <button id="about" class="hero-btn rounded-5" onclick="window.location.href = 'about.php'">Learn More</button>
                                <button id="project" class="hero-btn rounded-5" onclick="window.location.href = 'projects.php'">My Projects</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-3 flex-column">
                    <!-- Tech Stack Section -->
                    <p class="poppins-medium text-heading fs-2">Tech Stack</p>
                    <!-- Marquee Section -->
                    <div class="w-100 mx-auto marquee-wrapper marquee-fadeout">
                        <div class="marquee-view">
                            <div class="marquee-content d-flex">
                                <i class="fa-brands fa-react fa-4x icon-blue"></i>
                                <img class="custom-icon-stack icon-blue" src="assets/img/svgs/next-js.svg" alt="NextJS">
                                <img class="custom-icon-stack icon-blue" src="assets/img/svgs/typescript.svg" alt="TypeScript">
                                <i class="fa-brands fa-square-js fa-4x icon-blue"></i>
                                <i class="fa-brands fa-html5 fa-4x icon-blue"></i>
                                <i class="fa-brands fa-css3-alt fa-4x icon-blue"></i>
                                <img class="custom-icon-stack icon-blue" src="assets/img/svgs/mysql.svg" alt="MySQL">
                                <i class="fa-brands fa-python fa-4x icon-blue"></i>
                                <i class="fa-brands fa-github fa-4x icon-blue"></i>
                                <img class="custom-icon-stack icon-blue" src="assets/img/svgs/arduino.svg" alt="Arduino">
                                <!-- Duplicates -->
                                <i aria-hidden="true" class="fa-brands fa-react fa-4x icon-blue"></i>
                                <img aria-hidden="true" class="custom-icon-stack icon-blue" src="assets/img/svgs/next-js.svg" alt="NextJS">
                                <img aria-hidden="true" class="custom-icon-stack icon-blue" src="assets/img/svgs/typescript.svg" alt="TypeScript">
                                <i aria-hidden="true" class="fa-brands fa-square-js fa-4x icon-blue"></i>
                                <i aria-hidden="true" class="fa-brands fa-html5 fa-4x icon-blue"></i>
                                <i aria-hidden="true" class="fa-brands fa-css3-alt fa-4x icon-blue"></i>
                                <img aria-hidden="true" class="custom-icon-stack icon-blue" src="assets/img/svgs/mysql.svg" alt="MySQL">
                                <i aria-hidden="true" class="fa-brands fa-python fa-4x icon-blue"></i>
                                <i aria-hidden="true" class="fa-brands fa-github fa-4x icon-blue"></i>
                                <img aria-hidden="true" class="custom-icon-stack icon-blue" src="assets/img/svgs/arduino.svg" alt="Arduino">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'includes/footer.php'?>