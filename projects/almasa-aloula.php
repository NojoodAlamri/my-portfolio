<?php
include "../components/header.php";


$breadcrumbItems = [
    ['label' => 'Home', 'url' => '../index.php'],
    ['label' => 'Projects', 'url' => '../projects.php'],
    ['label' => 'Almasa Al-Oula']
];
renderBreadcrumb($breadcrumbItems);


renderIntro(
    "Almasa Al-Oula",
    "A responsive Arabic website designed for Almasa Al-Oula to showcase transportation services, fleet, and client engagement.",
    "../images/almasa-aloula/hero.png",
    "https://nojoodalamri.github.io/almasa-aloula/"
);



$aboutParagraphs = [
    "
    This project was built for Almasa Al-Oula, a professional transportation company based in Saudi Arabia. I was responsible for designing and developing a fully responsive and visually clean landing page that introduces the company’s services, showcases their fleet, and highlights their professionalism.
    ",

    "
    The site was created to serve as a digital front for the business — allowing potential clients to learn about their offerings, view testimonials, and easily get in touch.
    "
];

renderAbout("About the Project", $aboutParagraphs);



$goals = [
    ["icon" => "fa-bus", "text" => "Build a modern, trust-inspiring digital presence for a local transportation business."],
    ["icon" => "fa-list", "text" => "Clearly present services, fleet, team, and customer reviews in a structured and engaging layout."],
    ["icon" => "fa-mobile-alt", "text" => "Ensure usability across devices with a mobile-first responsive design."],
];

renderGoals($goals);



$techStack = [
    ["name" => "HTML", "img" => "html5", "type" => "frontend"],
    ["name" => "CSS", "img" => "css3", "type" => "frontend"],
    ["name" => "JavaScript", "img" => "javascript", "type" => "frontend"],
    ["name" => "Bootstrap", "img" => "bootstrap", "type" => "frontend"],
];

renderTechStack($techStack);



$features = [
    "Service Overview: Highlights public transport, corporate travel, airport shuttles, and private trip offerings.",
    "Fleet Section: Showcases the company’s buses with high-quality images.",
    "Team Profiles: Introduces team members with photos and short bios.",
    "Client Testimonials: Displays feedback from real customers to build trust.",
    "Contact Section: Includes phone, email, and location info for easy inquiries.",
    "Responsive Design: Looks great on mobile, tablet, and desktop devices.",
    "Arabic Language Support: Full RTL layout and culturally relevant presentation."
];

renderFeatures($features);


$folderPath = "../images/almasa-aloula/";

$screenshots = [
    ["file" => "s1.png", "caption" => "Homepage with bus fleet and clean navigation bar"],
    ["file" => "s2.png", "caption" => "Quick booking panel and service highlights"],
    ["file" => "s3.png", "caption" => "Values section"],
    ["file" => "s4.png", "caption" => "Services section"],
    ["file" => "s5.png", "caption" => "Modern fleet displayed in a simple image carousel"],
    ["file" => "s6.png", "caption" => "Full-screen photo viewer with zoom and navigation"],
    ["file" => "s7.png", "caption" => "Contact Info and footer"]
];

renderScreenshots($screenshots, $folderPath);



include "../components/footer.php";

