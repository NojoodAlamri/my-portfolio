<?php
include "../components/header.php";

$breadcrumbItems = [
    ['label' => 'Home', 'url' => '../index.php'],
    ['label' => 'Projects', 'url' => '../projects.php'],
    ['label' => 'Biltmam'] // العنصر الأخير لا يحتاج url
];

renderBreadcrumb($breadcrumbItems); ?>

<!--Intro-->
<?php renderIntro(
    "Biltmam",
    "Event planning app that connects planners with vendors and sponsors to simplify booking and coordination.",
    "../images/biltmam/hero.png",
    "dddddddd",
    "View Project Report (pdf)"
);  ?>

<!-- About -->
<?php
$aboutParagraphs = [
    "
    Biltmam (Arabic for 'perfectly done') is my first developed project, created as part of a senior graduation project in a team of five. It’s a cross-platform mobile application built with Flutter that simplifies event planning by connecting planners with verified vendors and potential sponsors, all in one streamlined platform.
 ",
    "
    We designed Biltmam to solve real pain points faced by event organizers, like the hassle of searching, booking, and coordinating with multiple parties. The app allows planners to discover services, book vendors, communicate via in-app chat, track order status, and even reach out to sponsors for support.
",
];

renderAbout("About the Project", $aboutParagraphs);
?>


<!-- Goals Section -->
<?php
// Dynamic Content Arrays
$goals = [
    [
        "icon" => "fa-user-friends",
        "text" => "Connect planners with vendors to simplify service discovery and bookings."
    ],
    [
        "icon" => "fa-handshake",
        "text" => "Facilitate collaboration between planners and sponsors for event support."
    ],
    [
        "icon" => "fa-comments",
        "text" => "Streamline booking, communication, and tracking with real-time chat and updates."
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
    ["file" => "welcome.png", "caption" => "Welcome Pages"],
    ["file" => "signup-signin.png", "caption" => "Sign In / Register"],
    ["file" => "planner1.png", "caption" => "Planner Pages"],
    ["file" => "planner2.png", "caption" => "Planner Pages"],
    ["file" => "planner3.png", "caption" => "Planner Pages"],
    ["file" => "vendor.png", "caption" => "Vendor Pages"],
    ["file" => "sponsor.png", "caption" => "Sponsor Pages"],
];


$folderPath = "../images/biltmam";

renderScreenshots($screenshots, $folderPath);

include "../components/footer.php";
?>


