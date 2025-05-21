<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eng. Nojood - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../style/styles.css">
    <!-- Add to your <head> -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<?php
include "../components/render-components.php";

$breadcrumbItems = [
    ['label' => 'Home', 'url' => '../index.html'],
    ['label' => 'Projects', 'url' => '../projects.html'],
    ['label' => 'Clinical Skill Tracker'] // العنصر الأخير لا يحتاج url
];





$features = [
    "Responsive Design: Optimized for seamless use across all screen sizes and devices.",
    "Instant, Personalized Results: Users receive real-time feedback without any data being saved.",
    "Structured Backend: SQL Server used to store questions and scoring rules, simplifying updates and ensuring accuracy.",
    "Built-in Support Links: Each result includes access to academic counseling, Ministry of Health resources, and hotline details.",
    "User-Centered Design: Interface built with simplicity, accessibility, and ease of navigation in mind."
];

$screenshots = [
    "student-1.png",
    "student-2.png",
    "student-3.png",


];
$folderPath = "../images/clinical-skill-tracker";

?>


<body>


<!-- Breadcrumb -->
<?php renderBreadcrumb($breadcrumbItems); ?>

<!--Intro-->
<?php renderIntro(
    "Clinical Skill Tracker",
    "Developed for the College of Nursing – KSAU-HS",
    "../images/clinical-skill-tracker/hero.png"
);  ?>

<!-- About -->
<?php
$aboutParagraphs = [
    "
The Logbook Tracker is a new feature integrated into the existing Student Lab Booking System (SLBS) — a self-service platform used by students to book practice and assessment sessions for clinical skills. This feature was developed to digitize the paper-based skill tracker used in labs and clinical sessions, where students record their progress and receive signatures from assessors.    ",
    "
The system streamlines the recording, confirmation, and reporting process for both students and assessors, enhancing accuracy, accessibility, and data integrity.    "
];
renderAbout("About the Project", $aboutParagraphs);
?>


<!-- Goals Section -->
<?php
// Dynamic Content Arrays
$goals = [
    [
        "icon" => "fa-clipboard-list",
        "text" => "Digitize the manual skill tracker used in labs and clinical environments."
    ],
    [
        "icon" => "fa-file-invoice",
        "text" => "Reduce paperwork and human error by managing all records digitally."
    ],
    [
        "icon" => "fa-user-check",
        "text" => "Ensure accountability and clarity between students and assessors."
    ],
];
renderGoals($goals)
?>


<!-- Tech Stack Section -->
<?php
$techStack = [
    ["name" => "HTML", "img" => "html5", "type" => "frontend"],
    ["name" => "CSS", "img" => "css3", "type" => "frontend"],
    ["name" => "JavaScript", "img" => "javascript", "type" => "frontend"],
    ["name" => "Bootstrap", "img" => "bootstrap", "type" => "frontend"],
    ["name" => "PHP", "img" => "php", "type" => "backend"],
    ["name" => "MySQL", "img" => "mysql", "type" => "database"],
];
renderTechStack($techStack)
?>


<!-- Features Section -->
<?php renderFeatures($features); ?>


<?php renderScreenshots($screenshots, $folderPath) ?>








<footer class="d-flex flex-wrap justify-content-center align-items-center py-4 px-3 mt-5 border-top"
        style="background-color: var(--background); color: var(--text);">
    <span class="mb-0 small">© 2025 Eng. Nojood. All rights reserved.</span>
</footer>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Fancybox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <!-- Swiper -->
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
                    slidesPerView: 3,
                    slidesPerGroup: 1,
                },
            },
            loop: true,
        });
    </script>
</body>
</html>
