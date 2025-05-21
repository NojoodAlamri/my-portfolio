<?php include "./components/render-components.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eng. Nojood - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./style/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
</head>
<?php

$certificateFiles = [

    "2025-appreciation-alumni-day.png",
    "2025-appreciation-nursing-conference.png",
    "2025-bootstrap.png",
    "2023-laravel.png",
    "2023-python.png",
    "2022-coop.png",
    "2023-backend.png",
    "2023-database.png",
    "2023-frontend.png",


];

?>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
    <div class="container">
<div>
    <button class="navbar-toggler custom-navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <i class="fas fa-bars custom-toggler-icon"></i>
    </button>

</div>


        <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
            <nav class="custom-rounded-navbar">
                <ul class="nav-list">
                    <li><a href="#about" class="nav-link active">About</a></li>
                    <li><a href="#highlights" class="nav-link">Highlights</a></li>
                    <li><a href="#skills" class="nav-link">Skills</a></li>
                    <li><a href="#tools" class="nav-link">Tools & Tech</a></li>
                    <li><a href="#projects" class="nav-link">Projects</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>
        </div>

    </div>
</nav>





<!-- Sidebar Icons -->
<!--<div class="sidebar-icons">-->
<!--    <a href="#"><i class="fab fa-github"></i></a>-->
<!--    <a href="#"><i class="fab fa-twitter"></i></a>-->
<!--    <a href="#"><i class="fab fa-linkedin"></i></a>-->
<!--</div>-->

<!-- Email -->
<!--<div class="email-right">-->
<!--    <span class="email-text">nojood-alamri@outlook.com</span>-->
<!--    <div class="email-line"></div>-->
<!--</div>-->

<!-- Main Section -->
<section class="full-screen-section" id="about">
    <div class="container p-5 text-start">

        <p class="intro-hello">Hi there,</p>
        <h1 class="intro-name">I am <span>Nojood </span></h1>
        <h3 class="intro-about-me">I craft experiences for the web and beyond.</h3>
        <p class="intro-description">
            I'm a software engineer crafting smooth and meaningful experiences for the web and mobile, driven by curiosity and a passion for learning.
        </p>
        <a href="#" class="btn btn-gradient-filled mt-4" style="">View Projects </a>
        <a href="#" class="btn btn-gradient-outline mt-4" style="">Download Resume</a>
        <!-- Gradient Icon at Bottom Center -->
        <a href="#highlights" class="btn  scroll-btn">
            <i class="fa-solid fa-chevron-down icon-gradient"></i>
        </a>

    </div>

</section>

<!--highlights ✅-->
<section id="highlights" class="py-5" style="background-color: var(--background);">
    <div class="container">
        <div style="display: flex; align-items: center; justify-content: center">
            <h2 class="section-title">Highlights</h2>
        </div>

        <!-- Item 3 -->
        <div class="surface-card d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
            <div class="d-flex align-items-center gap-3">
                <img src="./images/ksau-logo.svg" alt="KSAU Logo" style="height: 50px;">
                <div>
                    <h5 class="text-white fw-bold mb-1 card-title-sm">Programmer</h5>
                    <p class="text-light small mb-0">King Saud bin Abdulaziz University</p>
                </div>
            </div>
            <span class="text-light small" style="white-space: nowrap;">2023 – Present</span>
        </div>


        <!-- Item 2 -->
        <div class="surface-card d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
            <div class="d-flex align-items-center gap-3">
                <img src="./images/sce-logo.svg" alt="SCE Logo" style="height: 50px;">
                <div>
                    <h5 class="text-white fw-bold mb-1 card-title-sm">Accredited Software Engineer</h5>
                    <p class="text-light small mb-0">Saudi Council of Engineers</p>
                </div>
            </div>
            <span class="text-light small" style="white-space: nowrap;">2023</span>
        </div>
        <!-- Item 1 -->
        <div class="surface-card d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
            <div class="d-flex align-items-center gap-3">
                <img src="./images/uj-logo.svg" alt="UJ Logo" style="height: 50px;">
                <div>
                    <h5 class="text-white fw-bold mb-1 card-title-sm">Bachelor of Software Engineering</h5>
                    <p class="text-light small mb-0">University of Jeddah</p>
                </div>
            </div>
            <span class="text-light small" style="white-space: nowrap;">2018 – 2022</span>
        </div>


    </div>
</section>


<!-- Skills Section -->
<section class="py-5" id="skills">
    <div class="container">
        <div style="display: flex; align-items: center; justify-content: center">
            <h2 class="text-center mb-5 section-title">Skills</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 px-md-5 px-sm-1">

            <!-- Card 1 -->
            <div class="col">
                <div class="surface-card m-0">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-braces card-icon"></i>
                        <div>
                            <h5 class="mb-1" style="color: var(--text);">Modern Application Development</h5>
                            <p class="mb-0">Build, test, and maintain full-featured apps following latest standards and technologies.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="surface-card m-0">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-people card-icon"></i>
                        <div>
                            <h5 class="mb-1" style="color: var(--text);">Requirements Allocation</h5>
                            <p class="mb-0">Work closely with analysts and users to gather needs, conduct feasibility studies, and ensure readiness.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="surface-card m-0">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-file-earmark-text card-icon"></i>
                        <div>
                            <h5 class="mb-1" style="color: var(--text);">SDLC Documentation</h5>
                            <p class="mb-0">Maintain clear documentation across all phases of the Software Development Life Cycle.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="surface-card m-0">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-shield-check card-icon"></i>
                        <div>
                            <h5 class="mb-1" style="color: var(--text);">Best Practices & Security</h5>
                            <p class="mb-0">Apply secure, efficient programming practices with an eye on performance and user safety.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Tools & Technologies ✅ -->
<section id="tools" class="py-5" style="background-color: var(--background);">
    <div class="container">
        <div style="display: flex; align-items: center; justify-content: center">
            <h2 class="text-center mb-4 section-title">
                Tools & Technologies
            </h2>
        </div>


        <!-- Tabs -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
            <button class="filter-tab active" data-filter="all">All Skills</button>
            <button class="filter-tab" data-filter="frontend">Frontend</button>
            <button class="filter-tab" data-filter="backend">Backend</button>
            <button class="filter-tab" data-filter="mobile">Mobile Development</button>
            <button class="filter-tab" data-filter="database">Database</button>
            <button class="filter-tab" data-filter="tools">DevOps & Tools</button>
        </div>

        <div class="d-flex flex-wrap justify-content-center gap-3">
            <div class="tool-card tool-item frontend">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML" />
                <p class="tool-label">HTML</p>
            </div>
            <div class="tool-card tool-item frontend">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS" />
                <p class="tool-label">CSS</p>
            </div>
            <div class="tool-card tool-item frontend">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" />
                <p class="tool-label">JavaScript</p>
            </div>
            <div class="tool-card tool-item frontend">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg" alt="jQuery" />
                <p class="tool-label">jQuery</p>
            </div>
            <div class="tool-card tool-item frontend">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap" />
                <p class="tool-label">Bootstrap</p>
            </div>
            <div class="tool-card tool-item frontend">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma" />
                <p class="tool-label">Figma</p>
            </div>
            <div class="tool-card tool-item backend">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" />
                <p class="tool-label">PHP</p>
            </div>
            <div class="tool-card tool-item backend">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" />
                <p class="tool-label">Laravel</p>
            </div>
            <div class="tool-card tool-item backend">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postman/postman-original.svg" alt="RESTful API" />
                <p class="tool-label">RESTful API</p>
            </div>
            <div class="tool-card tool-item mobile">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React Native" />
                <p class="tool-label">React Native</p>
            </div>
            <div class="tool-card tool-item database">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" />
                <p class="tool-label">MySQL</p>
            </div>
            <div class="tool-card tool-item database">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/microsoftsqlserver/microsoftsqlserver-plain.svg" alt="SQL" />
                <p class="tool-label">SQL</p>
            </div>
            <div class="tool-card tool-item tools">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git" />
                <p class="tool-label">Git</p>
            </div>
            <div class="tool-card tool-item tools">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub" />
                <p class="tool-label">GitHub</p>
            </div>
        </div>
    </div>
</section>

<script>
    const tabs = document.querySelectorAll('.filter-tab');
    const items = document.querySelectorAll('.tool-card');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const filter = tab.dataset.filter;

            items.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.classList.remove('d-none');
                } else {
                    item.classList.add('d-none');
                }
            });
        });
    });
</script>


<!--projects-->
<section id="projects" class="py-5">
    <div class="container">
        <div style="display: flex; align-items: center; justify-content: center">
            <h2 class="text-center mb-5 section-title">Latest Projects</h2>

        </div>
        <div class="row">

            <!-- Project Card -->
            <div class="col-md-4">
                <?php
                $link = "./projects/mental-health-scales.php";
                $image = "./images/mental-health-scales/hero.png";
                $title = "Mental Health Scales";
                $description =     "A mental health self-assessment platform for common psychological conditions.";
                $techIcons = [
                    "html5/html5-original.svg",
                    "css3/css3-original.svg",
                    "javascript/javascript-original.svg",
                    "bootstrap/bootstrap-original.svg",
                    "php/php-original.svg",
                    "microsoftsqlserver/microsoftsqlserver-plain.svg"
                ];
                renderProjectCard($link, $image, $title, $description, $techIcons)
                ?>
            </div>

            <!-- Project Card -->
            <div class="col-md-4">
                <?php
                $link = "./projects/clinical-skill-tracker.php";
                $image = "./images/clinical-skill-tracker/hero.png";
                $title = "Clinical Skill Tracker";
                $description = "A digital tool that helps students track and confirm clinical skills easily and accurately.";
                $techIcons = [
                    "html5/html5-original.svg",
                    "css3/css3-original.svg",
                    "javascript/javascript-original.svg",
                    "bootstrap/bootstrap-original.svg",
                    "php/php-original.svg",
                    "microsoftsqlserver/microsoftsqlserver-plain.svg"
                ];
                renderProjectCard($link, $image, $title, $description, $techIcons)
                ?>
            </div>

            <!-- Project Card -->
            <div class="col-md-4">
                <?php
                $link = "./projects/mental-health-scales.php";
                $image = "./images/mental-health-scales/hero.png";
                $title = "Mental dass Scales";
                $description =     "A mental health self-assessment platform for common psychological conditions.";
                $techIcons = [
                    "html5/html5-original.svg",
                    "css3/css3-original.svg",
                    "javascript/javascript-original.svg",
                    "bootstrap/bootstrap-original.svg",
                    "php/php-original.svg",
                    "microsoftsqlserver/microsoftsqlserver-plain.svg"
                ];
                renderProjectCard($link, $image, $title, $description, $techIcons)
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-4">
                <a href="./projects.html">
                    <button class="btn btn-outline">View More</button>
                </a>
            </div>
        </div>
    </div>
</section>


<!--certificates-->
<!-- Fancybox CSS & JS (add to your <head> or before </body>) -->
<section class="py-5" id="certificates">
    <div class="container">
        <div style="display: flex; align-items: center; justify-content: center">
            <h2 class="text-center mb-5 section-title">Certificates</h2>
        </div>
        <div class="swiper-container-wrapper position-relative">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($certificateFiles as $certificate): ?>
                        <div class="swiper-slide">
                            <a data-fancybox="certificates" href="./images/certificates/<?php echo $certificate; ?>" data-caption="Certificate">
                                <img src="./images/certificates/<?php echo $certificate; ?>" class="img-fluid rounded" style="max-height:300px; object-fit:contain;">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next d-none d-md-block"></div>
            <div class="swiper-button-prev d-none d-md-block"></div>
        </div>
        <!--        <div class="row pt-5">-->
        <!--            <div class="col-12 d-flex justify-content-center mt-4">-->
        <!--                <a href="./projects.html">-->
        <!--                    <button class="btn btn-outline">View More</button>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--        </div>-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 4,
                    slidesPerGroup: 1,
                },
            },
            loop: true,
            autoplay: {
                delay: 3000, // time between slides in ms
                disableOnInteraction: false, // keeps autoplay running even after manual navigation
            },
        });


    </script>
</section>


<section id="contact" class="py-5" style="background-color: var(--background);">
    <div class="container">
        <div class="row align-items-start g-5">
            <div style="display: flex; align-items: center; justify-content: center">
                <h2 class="section-title">Contact Me</h2>

            </div>

            <!-- Contact Info -->
            <div class="col-md-6 text-start mt-md-4 mt-sm-0">
                <div class="mt-md-4 mt-sm-0">
                    <p class="mb-2 text-white"><i class="fas fa-envelope me-2" style="color: var(--accent);"></i> <strong>Mail</strong></p>
                    <p class="text-light small">nojood@example.com</p>

                    <p class="mb-2 text-white mt-4"><i class="fas fa-map-marker-alt me-2" style="color: var(--accent);"></i> <strong>Location</strong></p>
                    <p class="text-light small">Jeddah, Saudi Arabia</p>
                </div>

                <!-- Social Icons -->
                <div class="mt-4 d-flex gap-3">
                    <a href="#" class="text-white"><i class="fab fa-github fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-dribbble fa-lg"></i></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control border-0 custom-placeholder" style="background-color: var(--surface); color: var(--text)" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control border-0 custom-placeholder" style="background-color: var(--surface); color: var(--text)" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea rows="5" class="form-control border-0 custom-placeholder" style="background-color: var(--surface); color: var(--text)" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline mt-2 px-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>



<footer class="d-flex flex-wrap justify-content-center align-items-center py-4 px-3 mt-5 border-top" style="background-color: var(--background); color: var(--text);">
    <span class="mb-0 small">© 2025 Eng. Nojood. All rights reserved.</span>

</footer>



<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Get all section elements and corresponding nav links
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".nav-list .nav-link");

    function activateNavLink() {
        let currentSection = "";

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100; // adjust offset
            const sectionHeight = section.offsetHeight;
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSection = section.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href").includes(currentSection)) {
                link.classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", activateNavLink);
</script>

<script>
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            const navbarCollapse = document.getElementById('navbarContent');
            if (navbarCollapse.classList.contains('show')) {
                const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                bsCollapse.hide();
            }
        });
    });
</script>



</body>
</html>
