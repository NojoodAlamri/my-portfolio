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
    ['label' => 'Home', 'url' => '../index.php'],
    ['label' => 'Projects', 'url' => '../projects.php'],
    ['label' => 'Mental Health Scales'] // العنصر الأخير لا يحتاج url
];

// Dynamic Content Arrays
$goals = [
    ["icon" => "fa-heartbeat", "text" => "Promote mental health awareness through digital, self-assessment tools during Global Mental Health Day."],
    ["icon" => "fa-user-shield", "text" => "Empower users with personal insights and immediate access to mental health resources."],
    ["icon" => "fa-universal-access", "text" => "Design for inclusivity and clarity, with a mobile-first, responsive approach."],
];

$techStack = [
    ["name" => "HTML", "img" => "html5", "type" => "frontend"],
    ["name" => "CSS", "img" => "css3", "type" => "frontend"],
    ["name" => "JavaScript", "img" => "javascript", "type" => "frontend"],
    ["name" => "Bootstrap", "img" => "bootstrap", "type" => "frontend"],
    ["name" => "PHP", "img" => "php", "type" => "backend"],
    ["name" => "SQL", "img" => "microsoftsqlserver", "type" => "database"],
];

$features = [
    "Responsive Design: Optimized for seamless use across all screen sizes and devices.",
    "Instant, Personalized Results: Users receive real-time feedback without any data being saved.",
    "Structured Backend: SQL Server used to store questions and scoring rules, simplifying updates and ensuring accuracy.",
    "Built-in Support Links: Each result includes access to academic counseling, Ministry of Health resources, and hotline details.",
    "User-Centered Design: Interface built with simplicity, accessibility, and ease of navigation in mind."
];



?>


<body>


<!-- Breadcrumb -->
<?php renderBreadcrumb($breadcrumbItems); ?>

<!--Intro-->
<?php renderIntro(
    "Mental Health Scales",
    "A mental health self-assessment platform for common psychological conditions.",
    "../images/mental-health-scales/hero.png",
    "https://conj.ksau-hs.edu.sa/standalone/basic-contents/mental-health-scales/index.php"
);  ?>

<!-- About -->
<?php
$aboutParagraphs = [
    "A web-based tool developed for Global Mental Health Day, designed to digitize psychological assessments and provide users with private, personalized results all while promoting awareness and access to mental health support resources.",
    "This was one of the first projects I worked on after starting my job, and it turned out to be a truly enjoyable and rewarding experience. It marked the beginning of my journey with a wonderful and collaborative team. Despite the time constraints, we managed to deliver a polished and fully functional platform in less than a week."
];
renderAbout("About the Project", $aboutParagraphs);
?>

<!-- Goals Section -->
<?php renderGoals($goals) ?>

<!-- Tech Stack Section -->
<?php renderTechStack($techStack) ?>

<!-- Features Section -->
<?php renderFeatures($features); ?>







<?php
$folderPath = "../images/mental-health-scales";
$screenshots = [
    ["file" => "s1.png", "caption" => "Main Landing Page"],
    ["file" => "s2.png", "caption" => "Intro and Disclaimer"],
    ["file" => "s3.png", "caption" => "Test Categories Overview"],
    ["file" => "s4.png", "caption" => "Consent Notice Before Test"],
    ["file" => "s5.png", "caption" => "Depression Assessment – Part 1"],
    ["file" => "s6.png", "caption" => "Depression Assessment – Part 2"],
    ["file" => "s7.png", "caption" => "Final Result and Recommendations"],
];


renderScreenshots($screenshots, $folderPath) ?>




<!--References-->
<section class="mt-5 pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="surface-card height-fit" >
                    <h3 class="mb-2 d-flex justify-content-center font-bold">
                        <span class="sub-title">
                            Test Source References
                        </span>
                    </h3>
                    <ul class="font-1rem p-0 list-unstyled">
                        <li><strong>Anxiety / Depression / Panic Disorder:</strong><br>
                            AlHadi AN, AlAteeq DA, Al-Sharif E, et al. <em>An Arabic translation, reliability, and validation of Patient Health Questionnaire in a Saudi sample.</em> Ann Gen Psychiatry. 2017;16(1):32.Available from:
                            <a href="https://doi.org/10.1186/s12991-017-0155-1" target="_blank">doi.org</a>
                            <br>
                            <br>
                        </li>
                        <li>

                            <strong>Eating Disorder Tool:</strong><br>
                            Nasser, M. (1994). <em>The EAT-26: Psychometric properties and clinical norms in an Arabic-speaking population.</em> Soc Psychiatry Psychiatr Epidemiol, 29(2), 88–94. Available from:
                            <a href="https://doi.org/10.1007/BF00802049" target="_blank">https://doi.org/10.1007/BF00802049</a><br>
                            Rania, M. H., & El-Badri, S. (2020). <em>Reliability and validity of the Arabic version of the EAT-26 in a sample of Lebanese adolescents.</em> BMC Psychiatry, 20, 358. Available from:
                            <a href="https://doi.org/10.1186/s12888-020-02854-2" target="_blank">doi.org</a>
                            <br>
                            <br>

                        </li>
                        <li>
                            <strong>ADHD Tool:</strong><br>
                            Karam, E. G., et al. (2010). <em>Validation of the Arabic version of the Adult ADHD Self-Report Scale (ASRS) in a Lebanese sample.</em> J Atten Disord, 14(6), 522–532. Available from:
                            <a href="https://doi.org/10.1177/1087054710364222" target="_blank">doi.org</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
</section>




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
