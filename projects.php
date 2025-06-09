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
    <!-- Add to your <head> -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<?php
include "./components/render-components.php";

$breadcrumbItems = [
    ['label' => 'Home', 'url' => './index.php'],
    ['label' => 'Projects', 'url']
];
renderBreadcrumb($breadcrumbItems);

?>



<!--projects-->
<section id="projects" class="py-5 my-5">
    <div class="container">
        <div style="display: flex; align-items: center; justify-content: center">
            <h2 class="text-center mb-5 section-title">Projects</h2>

        </div>
        <div class="row">
            <!-- Almasa Al-Oula -->
            <div class="col-md-4 pt-4">
                <?php
                $link = "./projects/almasa-aloula.php";
                $image = "./images/almasa-aloula/hero.png";
                $title = "Almasa Al-Oula";
                $description =  "A responsive Arabic website designed for Almasa Al-Oula to showcase transportation services, fleet, and client engagement.";
                $techIcons = [
                    "html5/html5-original.svg",
                    "css3/css3-original.svg",
                    "javascript/javascript-original.svg",
                    "bootstrap/bootstrap-original.svg",
                ];
                renderProjectCard($link, $image, $title, $description, $techIcons)
                ?>
            </div>


            <!-- Mental Health Scales -->
            <div class="col-md-4 pt-4">
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


            <!-- Community Service Unit-->
            <div class="col-md-4 pt-4">
                <?php
                $link = "./projects/community-service-unit.php";
                $image = "./images/community-service-unit/hero.png";
                $title = "Community Service Unit";
                $description = "Community Service Unit Website Redesign ";
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

            <!-- Clinical Skill Tracker -->
            <div class="col-md-4 pt-4">
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
                    "mysql/mysql-original.svg"
                ];
                renderProjectCard($link, $image, $title, $description, $techIcons)
                ?>
            </div>


            <!-- Biltmam-->
            <div class="col-md-4 pt-4">
                <?php
                $link = "./projects/biltmam.php";
                $image = "./images/biltmam/hero.png";
                $title = "Biltmam - Event Planning App";
                $description = "Connects Events planners with vendors and sponsors to simplify booking and coordination.";
                $techIcons = [
                    "flutter/flutter-original.svg",
                    "firebase/firebase-plain.svg",
                    "figma/figma-original.svg",
                    "github/github-original.svg",

                ];
                renderProjectCard($link, $image, $title, $description, $techIcons)
                ?>
            </div>

        </div>


    </div>
</section>










<?php
include "components/footer.php";

?>