<?php
include "../components/header.php";


$breadcrumbItems = [
    ['label' => 'Home', 'url' => '../index.html'],
    ['label' => 'Projects', 'url' => '../projects.html'],
    ['label' => 'First Diamond']
];
renderBreadcrumb($breadcrumbItems);


renderIntro(
    "First Diamond",
    "A responsive Arabic website designed for Almasa Al-Oula to showcase transportation services, fleet, and client engagement.",
    "../images/first-diamond/hero.png",
    "https://nojoodalamri.github.io/first-diamond/"
);



$aboutParagraphs = [
    "A web-based tool developed for Global Mental Health Day, designed to digitize psychological assessments and provide users with private, personalized results all while promoting awareness and access to mental health support resources.",
    "This was one of the first projects I worked on after starting my job, and it turned out to be a truly enjoyable and rewarding experience. It marked the beginning of my journey with a wonderful and collaborative team. Despite the time constraints, we managed to deliver a polished and fully functional platform in less than a week."
];

renderAbout("About the Project", $aboutParagraphs);



$goals = [
    ["icon" => "fa-heartbeat", "text" => "Promote mental health awareness through digital, self-assessment tools during Global Mental Health Day."],
    ["icon" => "fa-user-shield", "text" => "Empower users with personal insights and immediate access to mental health resources."],
    ["icon" => "fa-universal-access", "text" => "Design for inclusivity and clarity, with a mobile-first, responsive approach."],
];

renderGoals($goals);



$techStack = [
    ["name" => "HTML", "img" => "html5", "type" => "frontend"],
    ["name" => "CSS", "img" => "css3", "type" => "frontend"],
    ["name" => "JavaScript", "img" => "javascript", "type" => "frontend"],
    ["name" => "Bootstrap", "img" => "bootstrap", "type" => "frontend"],
    ["name" => "PHP", "img" => "php", "type" => "backend"],
    ["name" => "SQL", "img" => "microsoftsqlserver", "type" => "database"],
];

renderTechStack($techStack);



$features = [
    "Responsive Design: Optimized for seamless use across all screen sizes and devices.",
    "Instant, Personalized Results: Users receive real-time feedback without any data being saved.",
    "Structured Backend: SQL Server used to store questions and scoring rules, simplifying updates and ensuring accuracy.",
    "Built-in Support Links: Each result includes access to academic counseling, Ministry of Health resources, and hotline details.",
    "User-Centered Design: Interface built with simplicity, accessibility, and ease of navigation in mind."
];

renderFeatures($features);


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

renderScreenshots($screenshots, $folderPath);



include "../components/footer.php";

