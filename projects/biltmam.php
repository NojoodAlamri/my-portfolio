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
    "../pdf/SeniorProjectReport.pdf",
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

    "
<br>
    <strong>My contributions included:</strong>
<ul>
  <li>Leading frontend development.</li>
  <li>Implementing role-based authentication and dynamic navigation.</li>
  <li>Designing vendor and planner workflows (signup, service creation, booking, feedback).</li>
  <li>Integrating Firebase for authentication, database, and real-time messaging.</li>
  <li>Writing and documenting sprint tasks and project implementation details.</li>
</ul>

    "

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
    "Role-Based Access Control: Separate experiences for Planners, Vendors, Sponsors, and Admins — each with tailored functionality and access.",
    "Service & Package Booking: Planners can easily search, book, and track services or packages offered by verified vendors.",
    "Real-Time Chat: In-app messaging between planners, vendors, and sponsors to streamline communication and coordination.",
    "Admin Verification System: Admins review and approve vendor profiles, services, and packages to ensure quality and trust.",
    "Favorites & Feedback: Planners can save favorite services for later and leave comments after bookings to help others evaluate options.",
];


renderFeatures($features); ?>

<!-- Tech Stack Section -->
<?php
$techStack = [
    ["name" => "flutter", "img" => "flutter", "type" => "mobile"],
    ["name" => "firebase", "img" => "firebase", "type" => "database"],
    ["name" => "figma", "img" => "figma", "type" => "frontend"],
    ["name" => "github", "img" => "github", "type" => "tools"],
];

renderTechStack($techStack)
?>


<?php
$challenges = [
    [
        "title" => "Multi-role Complexity (Admin, Vendor, Planner, Sponsor)",
        "problem" => "Designing role-specific logic, permissions, and interfaces without overlapping or breaking functionality.",
        "solution" => "Used role-based authentication with Firebase and directed each role to its custom home page and flow. Clear UI separation and functional boundaries for each user type."
    ],
    [
        "title" => "Authentication & Data Integrity",
        "problem" => "Ensuring only verified vendors/sponsors can list services or interact with planners.",
        "solution" => "Admin role built specifically for verifying users and content before activation. Authentication steps enforced at both sign-up and service submission level."
    ],
    [
        "title" => "Time Management Across Sprints",
        "problem" => "A lot of work for a short timeline.",
        "solution" => "Clear sprint planning with backlogs and burndown charts. Tasks divided by priority and role, and tracked sprint-by-sprint with actual delivery metrics."
    ],
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


