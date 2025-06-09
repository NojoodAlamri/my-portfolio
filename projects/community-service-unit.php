<?php
include "../components/header.php";

$name = "Community Service Unit";
$id = "community-service-unit";

$breadcrumbItems = [
    ['label' => 'Home', 'url' => '../index.php'],
    ['label' => 'Projects', 'url' => '../projects.php'],
    ['label' => $name]
];
renderBreadcrumb($breadcrumbItems);

renderIntro(
    $name,
    "Redesigned the $name website to enhance user experience, now adopted college-wide as a standard template.",
    "../images/$id/hero.png",
    "https://conj.ksau-hs.edu.sa/standalone/basic-contents/departments/community/community_index.php"
);

$aboutParagraphs = [
    "
    The project involved redesigning the website of the $name at the College of Nursing in Jeddah to improve usability, visual appeal, and accessibility. The redesign reflects a modern, engaging experience aligned with the university’s branding and mission to promote health awareness and community engagement. 
    ",
    "
    After the successful launch, the enhanced design was adopted by several other departments, making it a unified interface across the college.
    "
];
renderAbout("About the Project", $aboutParagraphs);

$goals = [
    ["icon" => "fa-users", "text" => "Improve user experience for students, faculty, and visitors."],
    ["icon" => "fa-layer-group", "text" => "Present information in a clear and structured format."],
    ["icon" => "fa-tablet-alt", "text" => "Ensure mobile and cross-device compatibility."],
    ["icon" => "fa-clone", "text" => "Create a scalable design applicable to other departments."],
];
renderGoals($goals, 3);

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
    "Clean, responsive layout that works across all screen sizes.",
    "Interactive gallery showcasing community activities with visual emphasis.",
    "Structured resource center with categorized forms, surveys, and reports.",
    "Live announcements section for timely event promotion.",
    "Volunteer statistics panel displaying real-time engagement metrics.",
    "Contact section with accessible links to email, phone, and location.",
    "Easily replicable template for other departments.",
];
renderFeatures($features);

$folderPath = "../images/$id/";

$screenshots = [
    ["file" => "s1.png", "caption" => "Homepage with activity highlights."],
    ["file" => "s2.png", "caption" => "Welcome message and mission."],
    ["file" => "s3.png", "caption" => "Event announcements section."],
    ["file" => "s4.png", "caption" => "Snippet from about us page."],
    ["file" => "s5.png", "caption" => "Activity gallery by topic."],
    ["file" => "s6.png", "caption" => "Full-screen image viewer for gallery items."],
    ["file" => "s7.png", "caption" => "Snippet from Resources center."],
];
renderScreenshots($screenshots, $folderPath);

include "../components/footer.php";
