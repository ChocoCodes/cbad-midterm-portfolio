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
                            <div class="d-flex flex-column">
                                <p>John Roland Octavio</p>
                                <p>Third Year CS Student</p>
                                <p>Over the past few years, I’ve built projects using React, TypeScript, and SQL including dynamic web apps and embedded systems.</p>
                                <div class="d-flex align-items-center gap-4">
                                    <a class="rounded-5 d-flex gap-2 justify-content-center align-items-center resume-btn p-2" href="assets/files/resume.pdf" target="_blank">Resume<span><i class="fa-solid fa-download"></i></span></a>
                                    <a href="https://github.com/ChocoCodes" target="_blank"><i class="fa-brands fa-github fa-2x contact-icon"></i></a>
                                    <a href="https://www.linkedin.com/in/johnrlnd" target="_blank"><i class="fa-brands fa-square-linkedin fa-2x contact-icon"></i></a>
                                    <a href="mailto:johnrlnd1704@gmail.com" target="_blank"><i class="fa-solid fa-envelope fa-2x contact-icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Experience/Education Container --> 
                    <div class="d-flex flex-column gap-4">
                        <div class="w-100 d-flex gap-2 justify-content-between">
                            <button class="w-50" onclick="showExperience()">Experience</button>
                            <button class="w-50" onclick="showEducation()">Education</button>
                        </div>
                        <ul id="experience" class="w-100 d-flex flex-column gap-4">
                            <li class="d-flex flex-column experience-item">
                                <div class="d-flex justify-content-between">
                                    <p>Chief Technology Officer</p>
                                    <p>Oct 2024 - Present</p>
                                </div>
                                <p>Google Developer Groups on Campus - USLS</p>
                            </li>
                            <li class="d-flex flex-column experience-item">
                                <div class="d-flex justify-content-between">
                                    <p>Web Development Lead</p>
                                    <p>Aug 2024 - Oct 2024</p>
                                </div>
                                <p>Google Developer Groups on Campus - USLS</p>
                            </li>
                            <li class="d-flex flex-column experience-item">
                                <div class="d-flex justify-content-between">
                                    <p>Prototype Development Head</p>
                                    <p>Jan 2023 - Mar 2023</p>
                                </div>
                                <p>UNO-R Capstone Project</p>
                            </li>
                        </ul>
                        <ul id="education" class="w-100 d-none flex-column gap-4">
                            <li class="d-flex flex-column education-item">
                                <div class="d-flex justify-content-between">
                                    <p>University of St. La Salle</p>
                                    <p>Expected June 2027</p>
                                </div>
                                <p>Bachelor of Science in Computer Science - Game Development</p>
                            </li>
                            <li class="d-flex flex-column education-item">
                                <div class="d-flex justify-content-between">
                                    <p>University of Negros Occidental-Recoletos</p>
                                    <p>June 2017 - May 2023</p>
                                </div>
                                <p>STEM - Engineering and Information Technology</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Hobbies Container --> 
                    <div class="d-flex flex-column gap-2">
                        <p class="poppins-medium text-heading fs-2">Hobbies</p>
                        <div class="w-100 d-flex hobbies-images-container">
                            <img src="assets/img/code.jpg" alt="Coding">
                            <img src="assets/img/basketball.jpg" alt="Basketball">
                            <img src="assets/img/lego.jpg" alt="Lego">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'includes/footer.php'?>