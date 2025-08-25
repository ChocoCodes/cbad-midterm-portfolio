<?php 
    include 'includes/metadata.php';
    $PageTitle = $META['about']['title'];
    $PageHeader = $META['about']['header'];

    include_once 'includes/head.php';
?>
    <div class="row min-vh-100 poppins-regular position-relative overflow-x-hidden">
        <?php include_once 'includes/menu.php'; ?>
        <div style="--glow-width: 23rem; --glow-height: 23rem; top: -10%; right: -10%;" class="background-glow position-absolute rounded-circle"></div>
        <div class="col-sm-10 main-container overflow-x-hidden d-flex justify-content-between align-items-center">
            <div class="main-content about-section w-75 mx-auto d-flex flex-column overflow-y-auto">
                <div class="d-flex gap-5 flex-column">
                    <!-- Intro Container --> 
                    <div class="d-flex gap-3 flex-column">
                        <!-- Page Header Section --> 
                        <p class="poppins-medium text-heading fs-2"><?= $PageHeader ?></p>
                        <div id="intro" class="d-flex align-items-center gap-5">
                            <img id="hero-image" style="--image-width: 230px; --image-height: 230px;" class="rounded-circle" src="assets/img/image-port.jpg" alt="Image of John Octavio">
                            <div class="d-flex flex-column gap-2">
                                <h3 class="poppins-semibold text-accent fs-2 no-mb">John Roland Octavio</h3>
                                <h4 class="poppins-medium text-subheading">Third Year CS Student</h4>
                                <p class="text-paragraph fs-6">Over the past 3 years, I’ve built projects using React, TypeScript, and SQL, including dynamic web apps and embedded systems.</p>
                                <div class="d-flex align-items-center gap-4">
                                    <a class="rounded-5 d-flex gap-2 justify-content-center align-items-center resume-btn p-2" href="assets/files/resume.pdf" target="_blank">
                                        Resume<span><i class="fa-solid fa-download"></i></span>
                                    </a>
                                    <a href="https://github.com/ChocoCodes" target="_blank">
                                        <i class="fa-brands fa-github fa-2x contact-icon"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/johnrlnd" target="_blank">
                                        <i class="fa-brands fa-square-linkedin fa-2x contact-icon"></i>
                                    </a>
                                    <a href="mailto:johnrlnd1704@gmail.com" target="_blank">
                                        <i class="fa-solid fa-envelope fa-2x contact-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="--glow-width: 23rem; --glow-height: 23rem; left: 3%; bottom: 30%;" class="background-glow position-absolute rounded-circle"></div>
                    <!-- Experience/Education Container --> 
                    <div class="d-flex flex-column gap-4">
                        <div id="toggle-button-container" class="w-100 d-flex gap-2 justify-content-between rounded-pill p-2">
                            <button id="exp-btn" class="w-50 active-section rounded-pill fs-4 no-btn-border" onclick="showExperience()">Experience</button>
                            <button id="edu-btn" class="w-50 default-section rounded-pill fs-4 no-btn-border" onclick="showEducation()">Education</button>
                        </div>
                        <ul id="experience" class="w-100 d-flex flex-column gap-4">
                            <li class="d-flex flex-column experience-item">
                                <div class="d-flex justify-content-between poppins-regular text-subheading">
                                    <p class="fs-5 poppins-medium">Chief Technology Officer</p>
                                    <p class="fs-6">Oct 2024 - Present</p>
                                </div>
                                <p class="poppins-regular-italic text-paragraph">Google Developer Groups on Campus - USLS</p>
                            </li>
                            <li class="d-flex flex-column experience-item">
                                <div class="d-flex justify-content-between poppins-regular text-subheading">
                                    <p class="fs-5 poppins-medium">Web Development Lead</p>
                                    <p class="fs-6">Aug 2024 - Oct 2024</p>
                                </div>
                                <p class="poppins-regular-italic text-paragraph">Google Developer Groups on Campus - USLS</p>
                            </li>
                            <li class="d-flex flex-column experience-item">
                                <div class="d-flex justify-content-between poppins-regular text-subheading">
                                    <p class="fs-5 poppins-medium">Prototype Development Head</p>
                                    <p class="fs-6">Jan 2023 - Mar 2023</p>
                                </div>
                                <p class="poppins-regular-italic text-paragraph">UNO-R Capstone Project</p>
                            </li>
                        </ul>
                        <ul id="education" class="w-100 d-none flex-column gap-4">
                            <li class="d-flex flex-column education-item">
                                <div class="d-flex justify-content-between poppins-regular text-subheading">
                                    <p class="fs-5 poppins-medium">University of St. La Salle</p>
                                    <p class="fs-6">Expected June 2027</p>
                                </div>
                                <p class="poppins-regular-italic text-paragraph">Bachelor of Science in Computer Science Major in Game Development</p>
                            </li>
                            <li class="d-flex flex-column education-item">
                                <div class="d-flex justify-content-between poppins-regular text-subheading">
                                    <p class="fs-5 poppins-medium">University of Negros Occidental-Recoletos</p>
                                    <p class="fs-6">June 2017 - May 2023</p>
                                </div>
                                <p class="poppins-regular-italic text-paragraph">STEM - Engineering and Information Technology</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Hobbies Container --> 
                    <div class="d-flex flex-column gap-2 overflow-y-hidden">
                        <p class="poppins-medium text-heading fs-2">Hobbies</p>
                        <div class="w-100 d-flex">
                            <div class="hobby position-relative">
                                <img class="rounded-start-4" src="assets/img/code.jpg" alt="Coding">
                                <div class="overlay position-absolute w-100 h-100">
                                    <h2 class="poppins-semibold text-subheading px-3 py-2">CODING</h2>
                                    <p class="px-3 poppins-regular text-paragraph fs-6">Currently finishing my Harvard CS50x final project - Expense Tracking System.</p>
                                </div>
                            </div>
                            <div class="hobby position-relative">
                                <img src="assets/img/basketball.jpg" alt="Basketball">
                                <div class="overlay position-absolute">
                                    <h2 class="poppins-semibold text-subheading px-3 py-2">BASKETBALL</h2>
                                    <p class="px-3 poppins-regular text-paragraph fs-6">Played under the UNO-R Rams basketball team (2017-2023).</p>
                                </div>
                            </div>
                            <div class="hobby position-relative">
                                <img class="rounded-end-4" src="assets/img/lego.jpg" alt="Lego">
                                <div class="overlay position-absolute">
                                    <h2 class="poppins-semibold text-subheading px-3 py-2">LEGO</h2>
                                    <p class="px-3 poppins-regular text-paragraph fs-6">I like to build LEGO cars when I have free time (and money)!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'includes/footer.php'?>