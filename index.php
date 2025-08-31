<?php 
    include 'includes/metadata.php';
    $PageTitle = $META['home']['title'];
    $PageHeader = $META['home']['header'];

    include_once 'includes/head.php';
    include_once 'includes/menu.php';
?>
    <div class="col-12 col-md-10 main-container overflow-y-auto overflow-x-hidden position-relative d-flex justify-content-between align-items-center px-0 py-3">
        <div id="notice-banner" class="w-100 position-absolute top-0 left-0">
            <p class="p-2 fs-6 text-center">This is a beta version of my portfolio site. Upgrades will be implemented soon.</p>
        </div>
        <div style="--glow-width: 23rem; --glow-height: 23rem; --glow-alpha: 0.85; top: -20%; right: -10%;" class="background-glow position-absolute rounded-circle d-none d-md-block"></div>
        <div class="main-content w-75 mx-auto d-flex flex-column px-0">
            <!-- Page Header Section --> 
            <p class="poppins-medium text-heading fs-2 apply-fade-in"><?= $PageHeader ?></p>
            <div class="d-flex gap-3 flex-column align-items-center">
                <!-- Hero Section -->
                <div class="d-flex hero align-items-center flex-column flex-md-row apply-fade-in" style="--delay: 0.2s;">
                    <img id="hero-image" class="rounded-circle" src="https://i.imgur.com/oHELf6g.jpeg" alt="Image of John Octavio">
                    <div class="d-flex flex-column gap-3 text-center text-md-start">
                        <h3 class="text-heading poppins-regular mb-0">Full Stack Developer</h3>
                        <h1 class="poppins-semibold text-accent lh-base mb-0">John Roland </br>Octavio</h1>
                        <p class="w-75 text-paragraph mx-auto mb-0 mx-md-0">A precise and analytical CS student passionate about building clean and effective solutions.</p>
                        <div class="d-flex gap-4 mx-auto mx-md-0">
                            <button id="about" class="hero-btn rounded-5" onclick="window.location.href = 'about.php'">Learn More</button>
                            <button id="project" class="hero-btn rounded-5" onclick="window.location.href = 'projects.php'">My Projects</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex gap-3 flex-column">
                <!-- Tech Stack Section -->
                <p class="poppins-medium text-heading fs-2 apply-fade-in" style="--delay: 0.4s">Tech Stack</p>
                <!-- Marquee Section -->
                <div class="w-100 mx-auto marquee-wrapper marquee-fadeout apply-fade-in" style="--delay: 0.6s">
                    <div class="marquee-view">
                        <div class="marquee-content d-flex py-2">
                            <i data-bs-toggle="tooltip" title="React" class="fa-brands fa-react fa-4x icon-accent"></i>
                            <img data-bs-toggle="tooltip" title="Next.js" class="custom-icon-stack icon-accent" src="assets/img/svgs/next-js.svg" alt="NextJS">
                            <img data-bs-toggle="tooltip" title="TypeScript" class="custom-icon-stack icon-accent" src="assets/img/svgs/typescript.svg" alt="TypeScript">
                            <i data-bs-toggle="tooltip" title="JavaScript"class="fa-brands fa-square-js fa-4x icon-accent"></i>
                            <i data-bs-toggle="tooltip" title="HTML" class="fa-brands fa-html5 fa-4x icon-accent"></i>
                            <i data-bs-toggle="tooltip" title="CSS" class="fa-brands fa-css3-alt fa-4x icon-accent"></i>
                            <img data-bs-toggle="tooltip" title="MySQL" class="custom-icon-stack icon-accent" src="assets/img/svgs/mysql.svg" alt="MySQL">
                            <i data-bs-toggle="tooltip" title="Python" class="fa-brands fa-python fa-4x icon-accent"></i>
                            <i data-bs-toggle="tooltip" title="Git" class="fa-brands fa-git-alt fa-4x icon-accent"></i>
                            <img data-bs-toggle="tooltip" title="Arduino" class="custom-icon-stack icon-accent" src="assets/img/svgs/arduino.svg" alt="Arduino">
                            <!-- Duplicates -->
                            <i aria-hidden="true" data-bs-toggle="tooltip" title="React" class="fa-brands fa-react fa-4x icon-accent"></i>
                            <img aria-hidden="true" data-bs-toggle="tooltip" title="Next.js" class="custom-icon-stack icon-accent" src="assets/img/svgs/next-js.svg" alt="NextJS">
                            <img aria-hidden="true"  data-bs-toggle="tooltip" title="TypeScript" class="custom-icon-stack icon-accent" src="assets/img/svgs/typescript.svg" alt="TypeScript">
                            <i aria-hidden="true"  data-bs-toggle="tooltip" title="JavaScript"class="fa-brands fa-square-js fa-4x icon-accent"></i>
                            <i aria-hidden="true" data-bs-toggle="tooltip" title="HTML" class="fa-brands fa-html5 fa-4x icon-accent"></i>
                            <i aria-hidden="true" data-bs-toggle="tooltip" title="CSS" class="fa-brands fa-css3-alt fa-4x icon-accent"></i>
                            <img aria-hidden="true"  data-bs-toggle="tooltip" title="MySQL" class="custom-icon-stack icon-accent" src="assets/img/svgs/mysql.svg" alt="MySQL">
                            <i aria-hidden="true" data-bs-toggle="tooltip" title="Python" class="fa-brands fa-python fa-4x icon-accent"></i>
                            <i aria-hidden="true"  data-bs-toggle="tooltip" title="Git" class="fa-brands fa-git-alt fa-4x icon-accent"></i>
                            <img aria-hidden="true"  data-bs-toggle="tooltip" title="Arduino" class="custom-icon-stack icon-accent" src="assets/img/svgs/arduino.svg" alt="Arduino">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'includes/footer.php'?>