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

?>
<body>
<!-- Breadcrumb -->
<?php

$breadcrumbItems = [
    ['label' => 'Home', 'url' => '../index.html'],
    ['label' => 'Projects', 'url' => '../projects.html'],
    ['label' => 'Clinical Skill Tracker'] // العنصر الأخير لا يحتاج url
];

renderBreadcrumb($breadcrumbItems); ?>

<!--Intro-->
<?php renderIntro(
    "Clinical Skill Tracker",
    "A digital tool that helps students track and confirm clinical skills easily and accurately.",
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


<!-- Features Section -->
<?php
$features = [
    "Lab and Clinical Skill Management: Each course has two skill types, lab and clinical, with 4 grades (E: Explained, D: Demo, P: Practice, C: Competence).",
    "Grade Entry: Assessors record student progress by assigning grades for each skill type.",
    "Student Confirmation: Students receive an email to confirm the grades entered by the assessor.",
    "Printable Reports: Students can print their personal skill progress reports. Assessors can view and print complete reports or filter by student.",
    "Smart Data Handling: Skill grades for each course are stored efficiently using JSON, drastically reducing record size.",
    "Real-Time Tracking: Both students and assessors can view skill completion, grade levels, and confirmation status."
];

renderFeatures($features); ?>

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


<?php
$challenges = [
    [
        "title" => "Complex Data Structure",
        "problem" => "Each student has multiple courses, each course contains multiple skills, and each skill requires tracking 8 grades (4 lab + 4 clinical).",
        "solution" => "Stored all grades in one JSON field, reducing 8 records into 1."
    ],
    [
        "title" => "Lack of Process Clarity",
        "problem" => "Initially, the team didn’t fully understand how the paper tracker was used.",
        "solution" => "Field visit revealed the actual paper workflow and signature process."
    ]
];

renderChallenges($challenges);

?>

<?php
$screenshots = [
    ["file" => "student-1.png", "caption" => "Student Dashboard – Guidelines"],
    ["file" => "student-2.png", "caption" => "Grades by Course and Semester"],
    ["file" => "student-3.png", "caption" => "Skill List with Confirmation Status"],
    ["file" => "student-4.png", "caption" => "Printable Logbook Report (PDF)"],
];


$folderPath = "../images/clinical-skill-tracker";

renderScreenshots($screenshots, $folderPath);


?>








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
